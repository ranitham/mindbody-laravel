<?php

declare(strict_types=1);

namespace Nlocascio\Mindbody\Tests\Unit;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Response;
use Nlocascio\Mindbody\Mindbody;
use Nlocascio\Mindbody\Model\AddAppointmentRequest;
use Nlocascio\Mindbody\Model\UpdateClassScheduleNotesRequest;
use Nlocascio\Mindbody\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\RequestInterface;

/**
 * Verifies that parameters of every `in` type present in mindbody.json
 * (query, path, body, header) are correctly serialised into the HTTP request.
 *
 * Each test captures the Guzzle PSR-7 RequestInterface produced by the
 * underlying API class and asserts that the parameter value appears in the
 * expected location of the HTTP message.
 */
class SwaggerParameterPassingTest extends TestCase
{
    /** @var list<RequestInterface> */
    private array $capturedRequests = [];

    // -------------------------------------------------------------------------
    // Test app configuration
    // -------------------------------------------------------------------------

    protected function defineEnvironment($app): void
    {
        $app['config']->set('mindbody.source_name', 'test-source');
        $app['config']->set('mindbody.apikey', 'test-api-key');
        $app['config']->set('mindbody.site_id', '-99');
        $app['config']->set('mindbody.source_credentials.username', '_test-source');
        $app['config']->set('mindbody.source_credentials.password', 'test-password');
        $app['config']->set('mindbody.verify_ssl', false);
        $app['config']->set('mindbody.audit', false);
        $app['config']->set('mindbody.debug', false);
    }

    // -------------------------------------------------------------------------
    // Helpers
    // -------------------------------------------------------------------------

    /**
     * Creates a Mindbody instance whose Guzzle handler captures every request
     * into $this->capturedRequests and always returns a successful mock response.
     */
    private function makeCapturingMindbody(): Mindbody
    {
        $this->capturedRequests = [];

        $handler = function (RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface {
            $this->capturedRequests[] = $request;

            return Create::promiseFor(new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['Status' => 'Success', 'AccessToken' => 'mock-token']),
            ));
        };

        return new Mindbody(new GuzzleClient(['handler' => HandlerStack::create($handler)]));
    }

    /**
     * Returns the last captured request (i.e. the actual API call, not the
     * auth-token preflight that Mindbody always makes first).
     */
    private function lastRequest(): RequestInterface
    {
        return end($this->capturedRequests);
    }

    private function queryStringOf(RequestInterface $request): string
    {
        return $request->getUri()->getQuery();
    }

    // -------------------------------------------------------------------------
    // `in: query` — scalar and array query parameters
    // -------------------------------------------------------------------------

    /**
     * Scalar query parameters must appear in the URL query string.
     *
     * Swagger op : Appointment_GetActiveSessionTimes
     * Parameter  : request.limit  (in: query, type: integer)
     */
    #[Test]
    public function scalar_query_parameter_appears_in_url_query_string(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        // GetActiveSessionTimes(endTime, limit, offset, scheduleType, sessionTypeIds, startTime)
        $mindbody->GetActiveSessionTimes(null, 25);

        $query = $this->queryStringOf($this->lastRequest());

        $this->assertStringContainsString('request.limit=25', $query,
            'Scalar query param "request.limit" must be present in the URL query string.');
    }

    /**
     * Array query parameters (collectionFormat: multi) must expand into
     * repeated keys in the URL query string.
     *
     * Swagger op : Appointment_GetBookableItems
     * Parameter  : request.sessionTypeIds  (in: query, type: array of integer, required)
     */
    #[Test]
    public function array_query_parameter_appears_in_url_query_string(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->GetBookableItems([101, 202]);

        $query = $this->queryStringOf($this->lastRequest());

        $this->assertStringContainsString('101', $query,
            'First element of array query param must appear in the URL query string.');
        $this->assertStringContainsString('202', $query,
            'Second element of array query param must appear in the URL query string.');
    }

    /**
     * Required array query parameters passed as a single-element array must
     * still appear correctly.
     *
     * Swagger op : Client_GetActiveClientsMemberships
     * Parameter  : request.clientIds  (in: query, type: array of string, required)
     */
    #[Test]
    public function required_string_array_query_parameter_appears_in_url(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->GetActiveClientsMemberships(['client-abc']);

        $query = $this->queryStringOf($this->lastRequest());

        $this->assertStringContainsString('client-abc', $query,
            'String array query param element must appear in the URL query string.');
    }

    // -------------------------------------------------------------------------
    // `in: body` — JSON request body
    // -------------------------------------------------------------------------

    /**
     * Body parameters must be serialised as JSON in the request body.
     *
     * Swagger op : Appointment_AddAppointment
     * Parameter  : request  (in: body, $ref: AddAppointmentRequest)
     */
    #[Test]
    public function body_parameter_is_serialised_as_json_in_request_body(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $request = (new AddAppointmentRequest())
            ->setStaffId(42)
            ->setLocationId(7)
            ->setSessionTypeId(3)
            ->setStartDateTime(new \DateTime('2024-06-01 10:00:00'))
            ->setClientId('client-xyz');

        $mindbody->AddAppointment($request);

        $body = (string) $this->lastRequest()->getBody();
        $decoded = json_decode($body, true);

        $this->assertIsArray($decoded, 'Request body must be valid JSON.');
        $this->assertSame(42, $decoded['StaffId'] ?? null,
            'StaffId must be present in the JSON body.');
        $this->assertSame(7, $decoded['LocationId'] ?? null,
            'LocationId must be present in the JSON body.');
        $this->assertSame('client-xyz', $decoded['ClientId'] ?? null,
            'ClientId must be present in the JSON body.');
    }

    /**
     * Body array parameters (array of model objects) must be serialised as a
     * JSON array in the request body.
     *
     * Swagger op : Sale_UpdateProducts
     * Parameter  : updateProductsRequests  (in: body, type: array of UpdateProductRequest)
     */
    #[Test]
    public function body_array_parameter_is_serialised_as_json_array(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->UpdateProducts(
            [new \Nlocascio\Mindbody\Model\UpdateProductRequest()]
        );

        $body    = (string) $this->lastRequest()->getBody();
        $decoded = json_decode($body, true);

        $this->assertIsArray($decoded, 'Body array parameter must produce a JSON array as the request body.');
    }

    // -------------------------------------------------------------------------
    // `in: path` — URL path substitution
    // -------------------------------------------------------------------------

    /**
     * Path parameters must be interpolated directly into the URL path.
     *
     * Swagger op : Class_UpdateClassScheduleNotes
     * Parameter  : classScheduleId  (in: path, type: integer, required)
     */
    #[Test]
    public function path_parameter_is_interpolated_into_url_path(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->UpdateClassScheduleNotes(
            9876,
            new UpdateClassScheduleNotesRequest(),
        );

        $path = $this->lastRequest()->getUri()->getPath();

        $this->assertStringContainsString('/9876', $path,
            'Path parameter classScheduleId must be substituted into the URL path.');
        $this->assertStringNotContainsString('{classScheduleId}', $path,
            'The {classScheduleId} placeholder must be replaced in the URL path.');
    }

    // -------------------------------------------------------------------------
    // `in: header` — HTTP request headers
    // -------------------------------------------------------------------------

    /**
     * Header parameters must be sent as HTTP headers on the request.
     *
     * Swagger op : Client_GetClientCompleteInfo
     * Parameter  : consumer-identity-token  (in: header, type: string, required: false)
     */
    #[Test]
    public function header_parameter_is_sent_as_http_request_header(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        // Signature: GetClientCompleteInfo(clientId, consumerIdentityToken, ...)
        $mindbody->GetClientCompleteInfo('client-123', 'my-identity-token-value');

        $headers = $this->lastRequest()->getHeaders();
        $headerNames = array_map('strtolower', array_keys($headers));

        $this->assertContains('consumer-identity-token', $headerNames,
            'Header parameter "consumer-identity-token" must be present in the HTTP request headers.');

        // Find the actual header value (headers are case-insensitive)
        $headerValue = '';
        foreach ($headers as $name => $values) {
            if (strtolower($name) === 'consumer-identity-token') {
                $headerValue = implode(', ', $values);
                break;
            }
        }

        $this->assertStringContainsString('my-identity-token-value', $headerValue,
            'The consumer-identity-token header must carry the provided value.');
    }

    // -------------------------------------------------------------------------
    // Content-Type header correctness
    // -------------------------------------------------------------------------

    /**
     * Requests with a body must declare Content-Type: application/json.
     *
     * Swagger op : Appointment_AddAppointment
     */
    #[Test]
    public function body_request_sends_json_content_type_header(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->AddAppointment(
            (new AddAppointmentRequest())
                ->setStaffId(1)
                ->setLocationId(1)
                ->setSessionTypeId(1)
                ->setStartDateTime(new \DateTime('2024-01-01'))
                ->setClientId('c1')
        );

        $contentType = $this->lastRequest()->getHeaderLine('Content-Type');

        $this->assertStringContainsString('application/json', $contentType,
            'Requests with a body parameter must send Content-Type: application/json.');
    }

    /**
     * GET requests with only query parameters must NOT send a request body.
     *
     * Swagger op : Appointment_GetActiveSessionTimes
     */
    #[Test]
    public function query_only_request_sends_no_body(): void
    {
        $mindbody = $this->makeCapturingMindbody();

        $mindbody->GetActiveSessionTimes(null, 10);

        $body = (string) $this->lastRequest()->getBody();

        $this->assertSame('', $body,
            'GET requests with only query parameters must not include a request body.');
    }
}

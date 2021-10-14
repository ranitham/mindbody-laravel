# Updating the API

1. Run php preprocessApi.php to download and process the Mindbody API
2. Get and build swagger codegen from my github fork
3. Run java -jar swagger-codegen-cli.jar generate  -l php -i mindbody.json -c swagger-php-config.json -t swagger-templates/php to generate the files
4. Fix up any return type issues (see SalesApi)
5. Delete src\test directory
6. Use Nlocascio\Mindbody\Mindbody::getEndpointMethodSignatures(); to update the method signatures at the top of Mindbody.php and MBO.php

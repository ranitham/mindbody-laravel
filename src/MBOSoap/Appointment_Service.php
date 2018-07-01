<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to appointments.
 */
class Appointment_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetStaffAppointments' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffAppointments',
  'GetStaffAppointmentsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffAppointmentsRequest',
  'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
  'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
  'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
  'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
  'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
  'StaffCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\StaffCredentials',
  'ArrayOfLong' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLong',
  'GetStaffAppointmentsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffAppointmentsResponse',
  'GetStaffAppointmentsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffAppointmentsResult',
  'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
  'ArrayOfAppointment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAppointment',
  'Appointment' => 'Nlocascio\\Mindbody\\MBOSoap\\Appointment',
  'ScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ScheduleItem',
  'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
  'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
  'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
  'ClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientService',
  'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
  'SalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\SalesRep',
  'Rep' => 'Nlocascio\\Mindbody\\MBOSoap\\Rep',
  'Staff' => 'Nlocascio\\Mindbody\\MBOSoap\\Staff',
  'ArrayOfUnavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUnavailability',
  'Unavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\Unavailability',
  'ArrayOfAvailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAvailability',
  'Availability' => 'Nlocascio\\Mindbody\\MBOSoap\\Availability',
  'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
  'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
  'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
  'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
  'ArrayOfProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProviderIDUpdate',
  'ProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ProviderIDUpdate',
  'ClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientRelationship',
  'Client' => 'Nlocascio\\Mindbody\\MBOSoap\\Client',
  'ArrayOfClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndex',
  'ClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndex',
  'ArrayOfClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndexValue',
  'ClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndexValue',
  'ClientCreditCard' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientCreditCard',
  'ArrayOfClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientRelationship',
  'ArrayOfRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfRep',
  'ArrayOfSalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSalesRep',
  'ArrayOfCustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCustomClientField',
  'CustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\CustomClientField',
  'Liability' => 'Nlocascio\\Mindbody\\MBOSoap\\Liability',
  'ProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ProspectStage',
  'Relationship' => 'Nlocascio\\Mindbody\\MBOSoap\\Relationship',
  'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
  'AddOrUpdateAppointments' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAppointments',
  'AddOrUpdateAppointmentsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAppointmentsRequest',
  'AddOrUpdateAppointmentsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAppointmentsResponse',
  'AddOrUpdateAppointmentsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAppointmentsResult',
  'GetBookableItems' => 'Nlocascio\\Mindbody\\MBOSoap\\GetBookableItems',
  'GetBookableItemsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetBookableItemsRequest',
  'GetBookableItemsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetBookableItemsResponse',
  'GetBookableItemsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetBookableItemsResult',
  'ArrayOfScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfScheduleItem',
  'GetScheduleItems' => 'Nlocascio\\Mindbody\\MBOSoap\\GetScheduleItems',
  'GetScheduleItemsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetScheduleItemsRequest',
  'GetScheduleItemsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetScheduleItemsResponse',
  'GetScheduleItemsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetScheduleItemsResult',
  'ArrayOfStaff' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfStaff',
  'AddOrUpdateAvailabilities' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAvailabilities',
  'AddOrUpdateAvailabilitiesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAvailabilitiesRequest',
  'ArrayOfDayOfWeek' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfDayOfWeek',
  'AddOrUpdateAvailabilitiesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAvailabilitiesResponse',
  'AddOrUpdateAvailabilitiesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateAvailabilitiesResult',
  'GetActiveSessionTimes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveSessionTimes',
  'GetActiveSessionTimesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveSessionTimesRequest',
  'GetActiveSessionTimesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveSessionTimesResponse',
  'GetActiveSessionTimesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActiveSessionTimesResult',
  'ArrayOfDateTime' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfDateTime',
  'GetAppointmentOptions' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAppointmentOptions',
  'GetAppointmentOptionsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAppointmentOptionsRequest',
  'GetAppointmentOptionsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAppointmentOptionsResponse',
  'GetAppointmentOptionsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetAppointmentOptionsResult',
  'ArrayOfOption' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfOption',
  'Option' => 'Nlocascio\\Mindbody\\MBOSoap\\Option',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/AppointmentService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of appointments that a given staff member is instructing.
     *
     * @param GetStaffAppointments $parameters
     * @return GetStaffAppointmentsResponse
     */
    public function GetStaffAppointments(GetStaffAppointments $parameters)
    {
      return $this->__soapCall('GetStaffAppointments', array($parameters));
    }

    /**
     * Adds or updates a list of appointments.
     *
     * @param AddOrUpdateAppointments $parameters
     * @return AddOrUpdateAppointmentsResponse
     */
    public function AddOrUpdateAppointments(AddOrUpdateAppointments $parameters)
    {
      return $this->__soapCall('AddOrUpdateAppointments', array($parameters));
    }

    /**
     * Gets a list of bookable items.
     *
     * @param GetBookableItems $parameters
     * @return GetBookableItemsResponse
     */
    public function GetBookableItems(GetBookableItems $parameters)
    {
      return $this->__soapCall('GetBookableItems', array($parameters));
    }

    /**
     * Gets a list of scheduled items (appointments, availabilities, and unavailabilities).
     *
     * @param GetScheduleItems $parameters
     * @return GetScheduleItemsResponse
     */
    public function GetScheduleItems(GetScheduleItems $parameters)
    {
      return $this->__soapCall('GetScheduleItems', array($parameters));
    }

    /**
     * Adds or updates a list of availabilities.
     *
     * @param AddOrUpdateAvailabilities $parameters
     * @return AddOrUpdateAvailabilitiesResponse
     */
    public function AddOrUpdateAvailabilities(AddOrUpdateAvailabilities $parameters)
    {
      return $this->__soapCall('AddOrUpdateAvailabilities', array($parameters));
    }

    /**
     * Gets a list of times that are active for a given program ID.
     *
     * @param GetActiveSessionTimes $parameters
     * @return GetActiveSessionTimesResponse
     */
    public function GetActiveSessionTimes(GetActiveSessionTimes $parameters)
    {
      return $this->__soapCall('GetActiveSessionTimes', array($parameters));
    }

    /**
     * Gets a list appointment options.
     *
     * @param GetAppointmentOptions $parameters
     * @return GetAppointmentOptionsResponse
     */
    public function GetAppointmentOptions(GetAppointmentOptions $parameters)
    {
      return $this->__soapCall('GetAppointmentOptions', array($parameters));
    }

}

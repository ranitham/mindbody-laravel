<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to staff.
 */
class Staff_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetStaff' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaff',
      'GetStaffRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffRequest',
      'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
      'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
      'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
      'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
      'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
      'ArrayOfLong' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLong',
      'StaffCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\StaffCredentials',
      'ArrayOfStaffFilter' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfStaffFilter',
      'GetStaffResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffResponse',
      'GetStaffResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffResult',
      'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
      'ArrayOfStaff' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfStaff',
      'Staff' => 'Nlocascio\\Mindbody\\MBOSoap\\Staff',
      'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
      'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
      'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
      'ClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientService',
      'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
      'SalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\SalesRep',
      'Rep' => 'Nlocascio\\Mindbody\\MBOSoap\\Rep',
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
      'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
      'Relationship' => 'Nlocascio\\Mindbody\\MBOSoap\\Relationship',
      'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
      'ScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ScheduleItem',
      'Appointment' => 'Nlocascio\\Mindbody\\MBOSoap\\Appointment',
      'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
      'Unavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\Unavailability',
      'Availability' => 'Nlocascio\\Mindbody\\MBOSoap\\Availability',
      'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
      'ArrayOfAppointment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAppointment',
      'ArrayOfUnavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ProviderIDUpdate',
      'GetStaffPermissions' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffPermissions',
      'GetStaffPermissionsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffPermissionsRequest',
      'GetStaffPermissionsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffPermissionsResponse',
      'GetStaffPermissionsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffPermissionsResult',
      'ArrayOfPermission' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfPermission',
      'Permission' => 'Nlocascio\\Mindbody\\MBOSoap\\Permission',
      'AddOrUpdateStaff' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateStaff',
      'AddOrUpdateStaffRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateStaffRequest',
      'AddOrUpdateStaffResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateStaffResponse',
      'AddOrUpdateStaffResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddOrUpdateStaffResult',
      'GetStaffImgURL' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffImgURL',
      'GetStaffImgURLRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffImgURLRequest',
      'GetStaffImgURLResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffImgURLResponse',
      'GetStaffImgURLResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetStaffImgURLResult',
      'ValidateStaffLogin' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateStaffLogin',
      'ValidateLoginRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLoginRequest',
      'ValidateStaffLoginResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateStaffLoginResponse',
      'ValidateLoginResult' => 'Nlocascio\\Mindbody\\MBOSoap\\ValidateLoginResult',
      'GetSalesReps' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesReps',
      'GetSalesRepsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesRepsRequest',
      'GetSalesRepsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesRepsResponse',
      'GetSalesRepsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSalesRepsResult',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of staff members.
     *
     * @param GetStaff $parameters
     * @return GetStaffResponse
     */
    public function GetStaff(GetStaff $parameters)
    {
      return $this->__soapCall('GetStaff', array($parameters));
    }

    /**
     * Gets a list of staff permissions based on the given staff member.
     *
     * @param GetStaffPermissions $parameters
     * @return GetStaffPermissionsResponse
     */
    public function GetStaffPermissions(GetStaffPermissions $parameters)
    {
      return $this->__soapCall('GetStaffPermissions', array($parameters));
    }

    /**
     * Add or update staff.
     *
     * @param AddOrUpdateStaff $parameters
     * @return AddOrUpdateStaffResponse
     */
    public function AddOrUpdateStaff(AddOrUpdateStaff $parameters)
    {
      return $this->__soapCall('AddOrUpdateStaff', array($parameters));
    }

    /**
     * Gets a staff member's image URL if it exists.
     *
     * @param GetStaffImgURL $parameters
     * @return GetStaffImgURLResponse
     */
    public function GetStaffImgURL(GetStaffImgURL $parameters)
    {
      return $this->__soapCall('GetStaffImgURL', array($parameters));
    }

    /**
     * Validates a username and password. This method returns the staff on success.
     *
     * @param ValidateStaffLogin $parameters
     * @return ValidateStaffLoginResponse
     */
    public function ValidateStaffLogin(ValidateStaffLogin $parameters)
    {
      return $this->__soapCall('ValidateStaffLogin', array($parameters));
    }

    /**
     * Gets a list of sales reps based on the requested rep IDs
     *
     * @param GetSalesReps $parameters
     * @return GetSalesRepsResponse
     */
    public function GetSalesReps(GetSalesReps $parameters)
    {
      return $this->__soapCall('GetSalesReps', array($parameters));
    }

}

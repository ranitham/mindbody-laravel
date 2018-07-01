<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to sites and locations.
 */
class Site_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetSites' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSites',
  'GetSitesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSitesRequest',
  'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
  'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
  'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
  'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
  'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
  'GetSitesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSitesResponse',
  'GetSitesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSitesResult',
  'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
  'ArrayOfSite' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSite',
  'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
  'GetLocations' => 'Nlocascio\\Mindbody\\MBOSoap\\GetLocations',
  'GetLocationsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetLocationsRequest',
  'GetLocationsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetLocationsResponse',
  'GetLocationsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetLocationsResult',
  'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
  'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
  'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
  'GetActivationCode' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActivationCode',
  'GetActivationCodeRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActivationCodeRequest',
  'GetActivationCodeResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActivationCodeResponse',
  'GetActivationCodeResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetActivationCodeResult',
  'GetPrograms' => 'Nlocascio\\Mindbody\\MBOSoap\\GetPrograms',
  'GetProgramsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProgramsRequest',
  'GetProgramsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProgramsResponse',
  'GetProgramsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProgramsResult',
  'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
  'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
  'GetSessionTypes' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSessionTypes',
  'GetSessionTypesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSessionTypesRequest',
  'GetSessionTypesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSessionTypesResponse',
  'GetSessionTypesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSessionTypesResult',
  'ArrayOfSessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSessionType',
  'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
  'GetResources' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResources',
  'GetResourcesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourcesRequest',
  'GetResourcesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourcesResponse',
  'GetResourcesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourcesResult',
  'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
  'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
  'GetRelationships' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRelationships',
  'GetRelationshipsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRelationshipsRequest',
  'GetRelationshipsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRelationshipsResponse',
  'GetRelationshipsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetRelationshipsResult',
  'ArrayOfRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfRelationship',
  'Relationship' => 'Nlocascio\\Mindbody\\MBOSoap\\Relationship',
  'GetResourceSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourceSchedule',
  'GetResourceScheduleRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourceScheduleRequest',
  'GetResourceScheduleResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourceScheduleResponse',
  'GetResourceScheduleResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetResourceScheduleResult',
  'ReserveResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ReserveResource',
  'ReserveResourceRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\ReserveResourceRequest',
  'ReserveResourceResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\ReserveResourceResponse',
  'ReserveResourceResult' => 'Nlocascio\\Mindbody\\MBOSoap\\ReserveResourceResult',
  'GetMobileProviders' => 'Nlocascio\\Mindbody\\MBOSoap\\GetMobileProviders',
  'GetMobileProvidersRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetMobileProvidersRequest',
  'GetMobileProvidersResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetMobileProvidersResponse',
  'GetMobileProvidersResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetMobileProvidersResult',
  'ArrayOfMobileProvider' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfMobileProvider',
  'MobileProvider' => 'Nlocascio\\Mindbody\\MBOSoap\\MobileProvider',
  'GetProspectStages' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProspectStages',
  'GetProspectStagesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProspectStagesRequest',
  'GetProspectStagesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProspectStagesResponse',
  'GetProspectStagesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetProspectStagesResult',
  'ArrayOfProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProspectStage',
  'ProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ProspectStage',
  'GetGenders' => 'Nlocascio\\Mindbody\\MBOSoap\\GetGenders',
  'GetGendersRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetGendersRequest',
  'GetGendersResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetGendersResponse',
  'GetGendersResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetGendersResult',
  'ArrayOfGenderOption' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfGenderOption',
  'GenderOption' => 'Nlocascio\\Mindbody\\MBOSoap\\GenderOption',
  'Row' => 'Nlocascio\\Mindbody\\MBOSoap\\Row',
  'RecordSet' => 'Nlocascio\\Mindbody\\MBOSoap\\RecordSet',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of sites.
     *
     * @param GetSites $parameters
     * @return GetSitesResponse
     */
    public function GetSites(GetSites $parameters)
    {
      return $this->__soapCall('GetSites', array($parameters));
    }

    /**
     * Gets a list of locations.
     *
     * @param GetLocations $parameters
     * @return GetLocationsResponse
     */
    public function GetLocations(GetLocations $parameters)
    {
      return $this->__soapCall('GetLocations', array($parameters));
    }

    /**
     * Gets an activation code.
     *
     * @param GetActivationCode $parameters
     * @return GetActivationCodeResponse
     */
    public function GetActivationCode(GetActivationCode $parameters)
    {
      return $this->__soapCall('GetActivationCode', array($parameters));
    }

    /**
     * Gets a list of programs.
     *
     * @param GetPrograms $parameters
     * @return GetProgramsResponse
     */
    public function GetPrograms(GetPrograms $parameters)
    {
      return $this->__soapCall('GetPrograms', array($parameters));
    }

    /**
     * Gets a list of session types.
     *
     * @param GetSessionTypes $parameters
     * @return GetSessionTypesResponse
     */
    public function GetSessionTypes(GetSessionTypes $parameters)
    {
      return $this->__soapCall('GetSessionTypes', array($parameters));
    }

    /**
     * Gets a list of resources.
     *
     * @param GetResources $parameters
     * @return GetResourcesResponse
     */
    public function GetResources(GetResources $parameters)
    {
      return $this->__soapCall('GetResources', array($parameters));
    }

    /**
     * Gets a list of relationships.
     *
     * @param GetRelationships $parameters
     * @return GetRelationshipsResponse
     */
    public function GetRelationships(GetRelationships $parameters)
    {
      return $this->__soapCall('GetRelationships', array($parameters));
    }

    /**
     * Gets all resources schedule.
     *
     * @param GetResourceSchedule $parameters
     * @return GetResourceScheduleResponse
     */
    public function GetResourceSchedule(GetResourceSchedule $parameters)
    {
      return $this->__soapCall('GetResourceSchedule', array($parameters));
    }

    /**
     * Reserves a resource.
     *
     * @param ReserveResource $parameters
     * @return ReserveResourceResponse
     */
    public function ReserveResource(ReserveResource $parameters)
    {
      return $this->__soapCall('ReserveResource', array($parameters));
    }

    /**
     * Gets a list of active mobile providers.
     *
     * @param GetMobileProviders $parameters
     * @return GetMobileProvidersResponse
     */
    public function GetMobileProviders(GetMobileProviders $parameters)
    {
      return $this->__soapCall('GetMobileProviders', array($parameters));
    }

    /**
     * Gets a list of prospect stages for a site.
     *
     * @param GetProspectStages $parameters
     * @return GetProspectStagesResponse
     */
    public function GetProspectStages(GetProspectStages $parameters)
    {
      return $this->__soapCall('GetProspectStages', array($parameters));
    }

    /**
     * Gets a list of prospect stages for a site.
     *
     * @param GetGenders $parameters
     * @return GetGendersResponse
     */
    public function GetGenders(GetGenders $parameters)
    {
      return $this->__soapCall('GetGenders', array($parameters));
    }

}

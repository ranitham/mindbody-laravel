<?php

namespace Nlocascio\Mindbody\MBOSoap;


/**
 * Provides methods and attributes relating to classes and enrollments.
 */
class Class_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetClasses' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClasses',
      'GetClassesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassesRequest',
      'MBRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\MBRequest',
      'SourceCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\SourceCredentials',
      'ArrayOfInt' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfInt',
      'UserCredentials' => 'Nlocascio\\Mindbody\\MBOSoap\\UserCredentials',
      'ArrayOfString' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfString',
      'ArrayOfLong' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLong',
      'GetClassesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassesResponse',
      'GetClassesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassesResult',
      'MBResult' => 'Nlocascio\\Mindbody\\MBOSoap\\MBResult',
      'ArrayOfClass' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClass',
      'Class' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassCustom',
      'MBObject' => 'Nlocascio\\Mindbody\\MBOSoap\\MBObject',
      'Site' => 'Nlocascio\\Mindbody\\MBOSoap\\Site',
      'ClassDescription' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassDescription',
      'Level' => 'Nlocascio\\Mindbody\\MBOSoap\\Level',
      'Program' => 'Nlocascio\\Mindbody\\MBOSoap\\Program',
      'SessionType' => 'Nlocascio\\Mindbody\\MBOSoap\\SessionType',
      'Resource' => 'Nlocascio\\Mindbody\\MBOSoap\\Resource',
      'ClientService' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientService',
      'SalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\SalesRep',
      'Rep' => 'Nlocascio\\Mindbody\\MBOSoap\\Rep',
      'Staff' => 'Nlocascio\\Mindbody\\MBOSoap\\Staff',
      'ArrayOfAppointment' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAppointment',
      'Appointment' => 'Nlocascio\\Mindbody\\MBOSoap\\Appointment',
      'ScheduleItem' => 'Nlocascio\\Mindbody\\MBOSoap\\ScheduleItem',
      'Unavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\Unavailability',
      'Availability' => 'Nlocascio\\Mindbody\\MBOSoap\\Availability',
      'ArrayOfProgram' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProgram',
      'Location' => 'Nlocascio\\Mindbody\\MBOSoap\\Location',
      'Client' => 'Nlocascio\\Mindbody\\MBOSoap\\Client',
      'ArrayOfClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndex',
      'ClientIndex' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientIndexValue',
      'ClientCreditCard' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClientRelationship',
      'ClientRelationship' => 'Nlocascio\\Mindbody\\MBOSoap\\ClientRelationship',
      'Relationship' => 'Nlocascio\\Mindbody\\MBOSoap\\Relationship',
      'ArrayOfRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfRep',
      'ArrayOfSalesRep' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSalesRep',
      'ArrayOfCustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCustomClientField',
      'CustomClientField' => 'Nlocascio\\Mindbody\\MBOSoap\\CustomClientField',
      'Liability' => 'Nlocascio\\Mindbody\\MBOSoap\\Liability',
      'ProspectStage' => 'Nlocascio\\Mindbody\\MBOSoap\\ProspectStage',
      'ArrayOfResource' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfResource',
      'ArrayOfUnavailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Nlocascio\\Mindbody\\MBOSoap\\ProviderIDUpdate',
      'Visit' => 'Nlocascio\\Mindbody\\MBOSoap\\Visit',
      'ArrayOfVisit' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfVisit',
      'ArrayOfClient' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClient',
      'UpdateClientVisits' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientVisits',
      'UpdateClientVisitsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientVisitsRequest',
      'UpdateClientVisitsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientVisitsResponse',
      'UpdateClientVisitsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\UpdateClientVisitsResult',
      'GetClassVisits' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassVisits',
      'GetClassVisitsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassVisitsRequest',
      'GetClassVisitsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassVisitsResponse',
      'GetClassVisitsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassVisitsResult',
      'GetClassDescriptions' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassDescriptions',
      'GetClassDescriptionsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassDescriptionsRequest',
      'GetClassDescriptionsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassDescriptionsResponse',
      'GetClassDescriptionsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassDescriptionsResult',
      'ArrayOfClassDescription' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClassDescription',
      'GetEnrollments' => 'Nlocascio\\Mindbody\\MBOSoap\\GetEnrollments',
      'GetEnrollmentsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetEnrollmentsRequest',
      'GetEnrollmentsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetEnrollmentsResponse',
      'GetEnrollmentsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetEnrollmentsResult',
      'ArrayOfClassSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfClassSchedule',
      'ClassSchedule' => 'Nlocascio\\Mindbody\\MBOSoap\\ClassSchedule',
      'Course' => 'Nlocascio\\Mindbody\\MBOSoap\\Course',
      'GetClassSchedules' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassSchedules',
      'GetClassSchedulesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassSchedulesRequest',
      'GetClassSchedulesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassSchedulesResponse',
      'GetClassSchedulesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetClassSchedulesResult',
      'AddClientsToClasses' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToClasses',
      'AddClientsToClassesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToClassesRequest',
      'AddClientsToClassesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToClassesResponse',
      'AddClientsToClassesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToClassesResult',
      'AddClientToClass' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientToClass',
      'AddClientToClassRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientToClassRequest',
      'AddClientToClassResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientToClassResponse',
      'RemoveClientsFromClasses' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveClientsFromClasses',
      'RemoveClientsFromClassesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveClientsFromClassesRequest',
      'RemoveClientsFromClassesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveClientsFromClassesResponse',
      'RemoveClientsFromClassesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveClientsFromClassesResult',
      'AddClientsToEnrollments' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToEnrollments',
      'AddClientsToEnrollmentsRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToEnrollmentsRequest',
      'ArrayOfDateTime' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfDateTime',
      'AddClientsToEnrollmentsResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToEnrollmentsResponse',
      'AddClientsToEnrollmentsResult' => 'Nlocascio\\Mindbody\\MBOSoap\\AddClientsToEnrollmentsResult',
      'RemoveFromWaitlist' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveFromWaitlist',
      'RemoveFromWaitlistRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveFromWaitlistRequest',
      'RemoveFromWaitlistResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveFromWaitlistResponse',
      'RemoveFromWaitlistResult' => 'Nlocascio\\Mindbody\\MBOSoap\\RemoveFromWaitlistResult',
      'GetSemesters' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSemesters',
      'GetSemestersRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSemestersRequest',
      'GetSemestersResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSemestersResponse',
      'GetSemestersResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetSemestersResult',
      'ArrayOfSemester' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfSemester',
      'Semester' => 'Nlocascio\\Mindbody\\MBOSoap\\Semester',
      'GetCourses' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCourses',
      'GetCoursesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCoursesRequest',
      'GetCoursesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCoursesResponse',
      'GetCoursesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetCoursesResult',
      'ArrayOfCourse' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfCourse',
      'GetWaitlistEntries' => 'Nlocascio\\Mindbody\\MBOSoap\\GetWaitlistEntries',
      'GetWaitlistEntriesRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\GetWaitlistEntriesRequest',
      'GetWaitlistEntriesResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\GetWaitlistEntriesResponse',
      'GetWaitlistEntriesResult' => 'Nlocascio\\Mindbody\\MBOSoap\\GetWaitlistEntriesResult',
      'ArrayOfWaitlistEntry' => 'Nlocascio\\Mindbody\\MBOSoap\\ArrayOfWaitlistEntry',
      'WaitlistEntry' => 'Nlocascio\\Mindbody\\MBOSoap\\WaitlistEntry',
      'SubstituteClassTeacher' => 'Nlocascio\\Mindbody\\MBOSoap\\SubstituteClassTeacher',
      'SubstituteClassTeacherRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\SubstituteClassTeacherRequest',
      'SubstituteClassTeacherResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\SubstituteClassTeacherResponse',
      'SubstituteClassTeacherResult' => 'Nlocascio\\Mindbody\\MBOSoap\\SubstituteClassTeacherResult',
      'SubtituteClassTeacher' => 'Nlocascio\\Mindbody\\MBOSoap\\SubtituteClassTeacher',
      'SubtituteClassTeacherResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\SubtituteClassTeacherResponse',
      'CancelSingleClass' => 'Nlocascio\\Mindbody\\MBOSoap\\CancelSingleClass',
      'CancelSingleClassRequest' => 'Nlocascio\\Mindbody\\MBOSoap\\CancelSingleClassRequest',
      'CancelSingleClassResponse' => 'Nlocascio\\Mindbody\\MBOSoap\\CancelSingleClassResponse',
      'CancelSingleClassResult' => 'Nlocascio\\Mindbody\\MBOSoap\\CancelSingleClassResult',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of classes.
     *
     * @param GetClasses $parameters
     * @return GetClassesResponse
     */
    public function GetClasses(GetClasses $parameters)
    {
      return $this->__soapCall('GetClasses', array($parameters));
    }

    /**
     * Update a list of visits.
     *
     * @param UpdateClientVisits $parameters
     * @return UpdateClientVisitsResponse
     */
    public function UpdateClientVisits(UpdateClientVisits $parameters)
    {
      return $this->__soapCall('UpdateClientVisits', array($parameters));
    }

    /**
     * Gets a class with a list of clients.
     *
     * @param GetClassVisits $parameters
     * @return GetClassVisitsResponse
     */
    public function GetClassVisits(GetClassVisits $parameters)
    {
      return $this->__soapCall('GetClassVisits', array($parameters));
    }

    /**
     * Gets a list of class descriptions.
     *
     * @param GetClassDescriptions $parameters
     * @return GetClassDescriptionsResponse
     */
    public function GetClassDescriptions(GetClassDescriptions $parameters)
    {
      return $this->__soapCall('GetClassDescriptions', array($parameters));
    }

    /**
     * Gets a list of enrollments.
     *
     * @param GetEnrollments $parameters
     * @return GetEnrollmentsResponse
     */
    public function GetEnrollments(GetEnrollments $parameters)
    {
      return $this->__soapCall('GetEnrollments', array($parameters));
    }

    /**
     * Gets a list of class schedules.
     *
     * @param GetClassSchedules $parameters
     * @return GetClassSchedulesResponse
     */
    public function GetClassSchedules(GetClassSchedules $parameters)
    {
      return $this->__soapCall('GetClassSchedules', array($parameters));
    }

    /**
     * Adds clients to classes (signup).
     *
     * @param AddClientsToClasses $parameters
     * @return AddClientsToClassesResponse
     */
    public function AddClientsToClasses(AddClientsToClasses $parameters)
    {
      return $this->__soapCall('AddClientsToClasses', array($parameters));
    }

    /**
     * Adds a client to a class.
     *
     * @param AddClientToClass $parameters
     * @return AddClientToClassResponse
     */
    public function AddClientToClass(AddClientToClass $parameters)
    {
      return $this->__soapCall('AddClientToClass', array($parameters));
    }

    /**
     * Removes clients from classes.
     *
     * @param RemoveClientsFromClasses $parameters
     * @return RemoveClientsFromClassesResponse
     */
    public function RemoveClientsFromClasses(RemoveClientsFromClasses $parameters)
    {
      return $this->__soapCall('RemoveClientsFromClasses', array($parameters));
    }

    /**
     * Adds clients to enrollments (signup).
     *
     * @param AddClientsToEnrollments $parameters
     * @return AddClientsToEnrollmentsResponse
     */
    public function AddClientsToEnrollments(AddClientsToEnrollments $parameters)
    {
      return $this->__soapCall('AddClientsToEnrollments', array($parameters));
    }

    /**
     * Removes client from enrollment waitlist
     *
     * @param RemoveFromWaitlist $parameters
     * @return RemoveFromWaitlistResponse
     */
    public function RemoveFromWaitlist(RemoveFromWaitlist $parameters)
    {
      return $this->__soapCall('RemoveFromWaitlist', array($parameters));
    }

    /**
     * Gets a list of semesters.
     *
     * @param GetSemesters $parameters
     * @return GetSemestersResponse
     */
    public function GetSemesters(GetSemesters $parameters)
    {
      return $this->__soapCall('GetSemesters', array($parameters));
    }

    /**
     * Gets a list of courses.
     *
     * @param GetCourses $parameters
     * @return GetCoursesResponse
     */
    public function GetCourses(GetCourses $parameters)
    {
      return $this->__soapCall('GetCourses', array($parameters));
    }

    /**
     * Get waitlist entries.
     *
     * @param GetWaitlistEntries $parameters
     * @return GetWaitlistEntriesResponse
     */
    public function GetWaitlistEntries(GetWaitlistEntries $parameters)
    {
      return $this->__soapCall('GetWaitlistEntries', array($parameters));
    }

    /**
     * Substitutes the teacher for a class.
     *
     * @param SubstituteClassTeacher $parameters
     * @return SubstituteClassTeacherResponse
     */
    public function SubstituteClassTeacher(SubstituteClassTeacher $parameters)
    {
      return $this->__soapCall('SubstituteClassTeacher', array($parameters));
    }

    /**
     * Substitutes the teacher for a class.
     *
     * @param SubtituteClassTeacher $parameters
     * @return SubtituteClassTeacherResponse
     */
    public function SubtituteClassTeacher(SubtituteClassTeacher $parameters)
    {
      return $this->__soapCall('SubtituteClassTeacher', array($parameters));
    }

    /**
     * Cancels a single class instance.
     *
     * @param CancelSingleClass $parameters
     * @return CancelSingleClassResponse
     */
    public function CancelSingleClass(CancelSingleClass $parameters)
    {
      return $this->__soapCall('CancelSingleClass', array($parameters));
    }

}

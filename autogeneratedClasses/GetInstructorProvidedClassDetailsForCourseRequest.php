<?php

class GetInstructorProvidedClassDetailsForCourseRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @param termCodeType $termCode
     * @param string $courseId
     */
    public function __construct($termCode, $courseId)
    {
      $this->termCode = $termCode;
      $this->courseId = $courseId;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return GetInstructorProvidedClassDetailsForCourseRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseId()
    {
      return $this->courseId;
    }

    /**
     * @param string $courseId
     * @return GetInstructorProvidedClassDetailsForCourseRequest
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

}

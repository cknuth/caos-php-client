<?php

class GetNonTeachingInstructorsResponse
{

    /**
     * @var instructor $instructor
     */
    protected $instructor = null;

    /**
     * @param instructor $instructor
     */
    public function __construct($instructor)
    {
      $this->instructor = $instructor;
    }

    /**
     * @return instructor
     */
    public function getInstructor()
    {
      return $this->instructor;
    }

    /**
     * @param instructor $instructor
     * @return GetNonTeachingInstructorsResponse
     */
    public function setInstructor($instructor)
    {
      $this->instructor = $instructor;
      return $this;
    }

}
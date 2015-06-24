<?php

class GetCombinedClassRosterResponse
{

    /**
     * @var classRoster $classRoster
     */
    protected $classRoster = null;

    /**
     * @param classRoster $classRoster
     */
    public function __construct($classRoster)
    {
      $this->classRoster = $classRoster;
    }

    /**
     * @return classRoster
     */
    public function getClassRoster()
    {
      return $this->classRoster;
    }

    /**
     * @param classRoster $classRoster
     * @return GetCombinedClassRosterResponse
     */
    public function setClassRoster($classRoster)
    {
      $this->classRoster = $classRoster;
      return $this;
    }

}

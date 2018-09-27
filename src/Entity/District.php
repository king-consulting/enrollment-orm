<?php

namespace KingConsulting\Entity;

/**
 * District
 */
class District
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schools;

    /**
     * @var \Entity\County
     */
    private $county_id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schools = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return District
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add school.
     *
     * @param \Entity\School $school
     *
     * @return District
     */
    public function addSchool(\Entity\School $school)
    {
        $this->schools[] = $school;

        return $this;
    }

    /**
     * Remove school.
     *
     * @param \Entity\School $school
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSchool(\Entity\School $school)
    {
        return $this->schools->removeElement($school);
    }

    /**
     * Get schools.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchools()
    {
        return $this->schools;
    }

    /**
     * Set countyId.
     *
     * @param \Entity\County $countyId
     *
     * @return District
     */
    public function setCountyId(\Entity\County $countyId)
    {
        $this->county_id = $countyId;

        return $this;
    }

    /**
     * Get countyId.
     *
     * @return \Entity\County
     */
    public function getCountyId()
    {
        return $this->county_id;
    }
}

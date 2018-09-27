<?php

namespace KingConsulting\Entity;

/**
 * School
 */
class School
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
     * @var string
     */
    private $cds_code;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schoolGradeCounts;

    /**
     * @var \Entity\District
     */
    private $district_id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schoolGradeCounts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return School
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
     * Set cdsCode.
     *
     * @param string $cdsCode
     *
     * @return School
     */
    public function setCdsCode($cdsCode)
    {
        $this->cds_code = $cdsCode;

        return $this;
    }

    /**
     * Get cdsCode.
     *
     * @return string
     */
    public function getCdsCode()
    {
        return $this->cds_code;
    }

    /**
     * Add schoolGradeCount.
     *
     * @param \Entity\SchoolGradeCount $schoolGradeCount
     *
     * @return School
     */
    public function addSchoolGradeCount(\Entity\SchoolGradeCount $schoolGradeCount)
    {
        $this->schoolGradeCounts[] = $schoolGradeCount;

        return $this;
    }

    /**
     * Remove schoolGradeCount.
     *
     * @param \Entity\SchoolGradeCount $schoolGradeCount
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSchoolGradeCount(\Entity\SchoolGradeCount $schoolGradeCount)
    {
        return $this->schoolGradeCounts->removeElement($schoolGradeCount);
    }

    /**
     * Get schoolGradeCounts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchoolGradeCounts()
    {
        return $this->schoolGradeCounts;
    }

    /**
     * Set districtId.
     *
     * @param \Entity\District $districtId
     *
     * @return School
     */
    public function setDistrictId(\Entity\District $districtId)
    {
        $this->district_id = $districtId;

        return $this;
    }

    /**
     * Get districtId.
     *
     * @return \Entity\District
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }
}

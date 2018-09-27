<?php

namespace Entity;

/**
 * County
 */
class County
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
    private $districts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->districts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return County
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
     * Add district.
     *
     * @param \Entity\District $district
     *
     * @return County
     */
    public function addDistrict(\Entity\District $district)
    {
        $this->districts[] = $district;

        return $this;
    }

    /**
     * Remove district.
     *
     * @param \Entity\District $district
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDistrict(\Entity\District $district)
    {
        return $this->districts->removeElement($district);
    }

    /**
     * Get districts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDistricts()
    {
        return $this->districts;
    }
}

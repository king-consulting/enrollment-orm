<?php namespace Entity;

/**
 * @Entity
 * @Table(name="Counties")
 */
class County
{

    /**
     * One county can have many districts
     * @OneToMany(targetEntity="District", mappedBy="Districts", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $districts;

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;

}

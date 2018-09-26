<?php namespace Entity;

/**
 * @Entity
 * @Table(name="Districts")
 */
class District
{

    /**
     * One district can have many schools
     * @OneToMany(targetEntity="School", mappedBy="Schools", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $schools;

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * Many districts belong to one county
     * @ManyToOne(targetEntity="County", inversedBy="Districts")
     * @JoinColumn(name="county_id", referencedColumnName="id", nullable=false)
     * @var \Entity\County
     */
    private $county_id;
}

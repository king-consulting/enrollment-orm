<?php namespace Entity;

/**
 * @Entity
 * @Table(name="Districts",indexes={@Index(name="name_idx", columns={"name"})})
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
     * @Column(type="integer")
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

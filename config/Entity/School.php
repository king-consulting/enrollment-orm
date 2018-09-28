<?php namespace Entity;

/**
 * @Entity
 * @Table(name="Schools",indexes={@Index(name="name_idx", columns={"name"}), @Index(name="cds_code_idx", columns={"cds_code"})})
 */
class School
{

    /**
     * One school can have many school grade counts
     * @OneToMany(targetEntity="SchoolGradeCount", mappedBy="SchoolGradeCounts", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $schoolGradeCounts;

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
     * @Column(type="string")
     */
    private $cds_code;

    /**
     * Many schools belong to one district
     * @ManyToOne(targetEntity="District", inversedBy="Schools")
     * @JoinColumn(name="district_id", referencedColumnName="id", nullable=false)
     * @var \Entity\District
     */
    private $district_id;
}

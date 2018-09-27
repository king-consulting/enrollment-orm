<?php namespace Entity;

/**
 * @Entity
 * @Table(name="SchoolGradeCounts")
 */
class SchoolGradeCount
{

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="integer")
     */
    private $year;

    /**
     * @Column(type="integer")
     */
    private $kdgn;

    /**
     * @Column(type="integer")
     */
    private $gr_1;

    /**
     * @Column(type="integer")
     */
    private $gr_2;

    /**
     * @Column(type="integer")
     */
    private $gr_3;

    /**
     * @Column(type="integer")
     */
    private $gr_4;

    /**
     * @Column(type="integer")
     */
    private $gr_5;

    /**
     * @Column(type="integer")
     */
    private $gr_6;

    /**
     * @Column(type="integer")
     */
    private $gr_7;

    /**
     * @Column(type="integer")
     */
    private $gr_8;

    /**
     * @Column(type="integer")
     */
    private $gr_9;

    /**
     * @Column(type="integer")
     */
    private $gr_10;

    /**
     * @Column(type="integer")
     */
    private $gr_11;

    /**
     * @Column(type="integer")
     */
    private $gr_12;

    /**
     * @Column(type="integer")
     */
    private $ungr_elm;

    /**
     * @Column(type="integer")
     */
    private $ungr_sec;

    /**
     * @Column(type="integer")
     */
    private $enr_total;

    /**
     * @Column(type="integer")
     */
    private $adult;

    /**
     * Many grade counts belong to one school
     * @ManyToOne(targetEntity="School", inversedBy="SchoolGradeCounts")
     * @JoinColumn(name="school_id", referencedColumnName="id", nullable=false)
     * @var \Entity\School
     */
    private $school_id;
}

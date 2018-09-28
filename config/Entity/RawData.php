<?php namespace Entity;

/**
 * @Entity
 * @Table(name="RawData")
 */
class RawData
{

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $CDS_CODE = '';

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $COUNTY = '';

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $DISTRICT = '';

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $SCHOOL = '';

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $ETHNIC = '';

    /**
     * @Column(type="string", options={"default" : ""})
     */
    private $GENDER = '';

    /**
     * @Column(type="integer")
     */
    private $KDGN;

    /**
     * @Column(type="integer")
     */
    private $GR_1;

    /**
     * @Column(type="integer")
     */
    private $GR_2;

    /**
     * @Column(type="integer")
     */
    private $GR_3;

    /**
     * @Column(type="integer")
     */
    private $GR_4;

    /**
     * @Column(type="integer")
     */
    private $GR_5;

    /**
     * @Column(type="integer")
     */
    private $GR_6;

    /**
     * @Column(type="integer")
     */
    private $GR_7;

    /**
     * @Column(type="integer")
     */
    private $GR_8;

    /**
     * @Column(type="integer")
     */
    private $GR_9;

    /**
     * @Column(type="integer")
     */
    private $GR_10;

    /**
     * @Column(type="integer")
     */
    private $GR_11;

    /**
     * @Column(type="integer")
     */
    private $GR_12;

    /**
     * @Column(type="integer")
     */
    private $UNGR_ELM;

    /**
     * @Column(type="integer")
     */
    private $UNGR_SEC;

    /**
     * @Column(type="integer")
     */
    private $ENR_TOTAL;

    /**
     * @Column(type="integer")
     */
    private $ADULT;

    /**
     * @Column(type="string")
     */
    private $YEAR;

}

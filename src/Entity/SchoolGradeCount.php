<?php

namespace KingConsulting\Entity;

/**
 * SchoolGradeCount
 */
class SchoolGradeCount
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $kdgn;

    /**
     * @var int
     */
    private $gr_1;

    /**
     * @var int
     */
    private $gr_2;

    /**
     * @var int
     */
    private $gr_3;

    /**
     * @var int
     */
    private $gr_4;

    /**
     * @var int
     */
    private $gr_5;

    /**
     * @var int
     */
    private $gr_6;

    /**
     * @var int
     */
    private $gr_7;

    /**
     * @var int
     */
    private $gr_8;

    /**
     * @var int
     */
    private $gr_9;

    /**
     * @var int
     */
    private $gr_10;

    /**
     * @var int
     */
    private $gr_11;

    /**
     * @var int
     */
    private $gr_12;

    /**
     * @var int
     */
    private $ungr_elm;

    /**
     * @var int
     */
    private $ungr_sec;

    /**
     * @var int
     */
    private $enr_total;

    /**
     * @var int
     */
    private $adult;

    /**
     * @var \Entity\School
     */
    private $school_id;


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
     * Set year.
     *
     * @param int $year
     *
     * @return SchoolGradeCount
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set kdgn.
     *
     * @param int $kdgn
     *
     * @return SchoolGradeCount
     */
    public function setKdgn($kdgn)
    {
        $this->kdgn = $kdgn;

        return $this;
    }

    /**
     * Get kdgn.
     *
     * @return int
     */
    public function getKdgn()
    {
        return $this->kdgn;
    }

    /**
     * Set gr1.
     *
     * @param int $gr1
     *
     * @return SchoolGradeCount
     */
    public function setGr1($gr1)
    {
        $this->gr_1 = $gr1;

        return $this;
    }

    /**
     * Get gr1.
     *
     * @return int
     */
    public function getGr1()
    {
        return $this->gr_1;
    }

    /**
     * Set gr2.
     *
     * @param int $gr2
     *
     * @return SchoolGradeCount
     */
    public function setGr2($gr2)
    {
        $this->gr_2 = $gr2;

        return $this;
    }

    /**
     * Get gr2.
     *
     * @return int
     */
    public function getGr2()
    {
        return $this->gr_2;
    }

    /**
     * Set gr3.
     *
     * @param int $gr3
     *
     * @return SchoolGradeCount
     */
    public function setGr3($gr3)
    {
        $this->gr_3 = $gr3;

        return $this;
    }

    /**
     * Get gr3.
     *
     * @return int
     */
    public function getGr3()
    {
        return $this->gr_3;
    }

    /**
     * Set gr4.
     *
     * @param int $gr4
     *
     * @return SchoolGradeCount
     */
    public function setGr4($gr4)
    {
        $this->gr_4 = $gr4;

        return $this;
    }

    /**
     * Get gr4.
     *
     * @return int
     */
    public function getGr4()
    {
        return $this->gr_4;
    }

    /**
     * Set gr5.
     *
     * @param int $gr5
     *
     * @return SchoolGradeCount
     */
    public function setGr5($gr5)
    {
        $this->gr_5 = $gr5;

        return $this;
    }

    /**
     * Get gr5.
     *
     * @return int
     */
    public function getGr5()
    {
        return $this->gr_5;
    }

    /**
     * Set gr6.
     *
     * @param int $gr6
     *
     * @return SchoolGradeCount
     */
    public function setGr6($gr6)
    {
        $this->gr_6 = $gr6;

        return $this;
    }

    /**
     * Get gr6.
     *
     * @return int
     */
    public function getGr6()
    {
        return $this->gr_6;
    }

    /**
     * Set gr7.
     *
     * @param int $gr7
     *
     * @return SchoolGradeCount
     */
    public function setGr7($gr7)
    {
        $this->gr_7 = $gr7;

        return $this;
    }

    /**
     * Get gr7.
     *
     * @return int
     */
    public function getGr7()
    {
        return $this->gr_7;
    }

    /**
     * Set gr8.
     *
     * @param int $gr8
     *
     * @return SchoolGradeCount
     */
    public function setGr8($gr8)
    {
        $this->gr_8 = $gr8;

        return $this;
    }

    /**
     * Get gr8.
     *
     * @return int
     */
    public function getGr8()
    {
        return $this->gr_8;
    }

    /**
     * Set gr9.
     *
     * @param int $gr9
     *
     * @return SchoolGradeCount
     */
    public function setGr9($gr9)
    {
        $this->gr_9 = $gr9;

        return $this;
    }

    /**
     * Get gr9.
     *
     * @return int
     */
    public function getGr9()
    {
        return $this->gr_9;
    }

    /**
     * Set gr10.
     *
     * @param int $gr10
     *
     * @return SchoolGradeCount
     */
    public function setGr10($gr10)
    {
        $this->gr_10 = $gr10;

        return $this;
    }

    /**
     * Get gr10.
     *
     * @return int
     */
    public function getGr10()
    {
        return $this->gr_10;
    }

    /**
     * Set gr11.
     *
     * @param int $gr11
     *
     * @return SchoolGradeCount
     */
    public function setGr11($gr11)
    {
        $this->gr_11 = $gr11;

        return $this;
    }

    /**
     * Get gr11.
     *
     * @return int
     */
    public function getGr11()
    {
        return $this->gr_11;
    }

    /**
     * Set gr12.
     *
     * @param int $gr12
     *
     * @return SchoolGradeCount
     */
    public function setGr12($gr12)
    {
        $this->gr_12 = $gr12;

        return $this;
    }

    /**
     * Get gr12.
     *
     * @return int
     */
    public function getGr12()
    {
        return $this->gr_12;
    }

    /**
     * Set ungrElm.
     *
     * @param int $ungrElm
     *
     * @return SchoolGradeCount
     */
    public function setUngrElm($ungrElm)
    {
        $this->ungr_elm = $ungrElm;

        return $this;
    }

    /**
     * Get ungrElm.
     *
     * @return int
     */
    public function getUngrElm()
    {
        return $this->ungr_elm;
    }

    /**
     * Set ungrSec.
     *
     * @param int $ungrSec
     *
     * @return SchoolGradeCount
     */
    public function setUngrSec($ungrSec)
    {
        $this->ungr_sec = $ungrSec;

        return $this;
    }

    /**
     * Get ungrSec.
     *
     * @return int
     */
    public function getUngrSec()
    {
        return $this->ungr_sec;
    }

    /**
     * Set enrTotal.
     *
     * @param int $enrTotal
     *
     * @return SchoolGradeCount
     */
    public function setEnrTotal($enrTotal)
    {
        $this->enr_total = $enrTotal;

        return $this;
    }

    /**
     * Get enrTotal.
     *
     * @return int
     */
    public function getEnrTotal()
    {
        return $this->enr_total;
    }

    /**
     * Set adult.
     *
     * @param int $adult
     *
     * @return SchoolGradeCount
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get adult.
     *
     * @return int
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set schoolId.
     *
     * @param \Entity\School $schoolId
     *
     * @return SchoolGradeCount
     */
    public function setSchoolId(\Entity\School $schoolId)
    {
        $this->school_id = $schoolId;

        return $this;
    }

    /**
     * Get schoolId.
     *
     * @return \Entity\School
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }
}

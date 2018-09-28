<?php

namespace Entity;

/**
 * RawData
 */
class RawData
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $CDS_CODE = '';

    /**
     * @var string
     */
    private $COUNTY = '';

    /**
     * @var string
     */
    private $DISTRICT = '';

    /**
     * @var string
     */
    private $SCHOOL = '';

    /**
     * @var string
     */
    private $ETHNIC = '';

    /**
     * @var string
     */
    private $GENDER = '';

    /**
     * @var int
     */
    private $KDGN;

    /**
     * @var int
     */
    private $GR_1;

    /**
     * @var int
     */
    private $GR_2;

    /**
     * @var int
     */
    private $GR_3;

    /**
     * @var int
     */
    private $GR_4;

    /**
     * @var int
     */
    private $GR_5;

    /**
     * @var int
     */
    private $GR_6;

    /**
     * @var int
     */
    private $GR_7;

    /**
     * @var int
     */
    private $GR_8;

    /**
     * @var int
     */
    private $GR_9;

    /**
     * @var int
     */
    private $GR_10;

    /**
     * @var int
     */
    private $GR_11;

    /**
     * @var int
     */
    private $GR_12;

    /**
     * @var int
     */
    private $UNGR_ELM;

    /**
     * @var int
     */
    private $UNGR_SEC;

    /**
     * @var int
     */
    private $ENR_TOTAL;

    /**
     * @var int
     */
    private $ADULT;

    /**
     * @var string
     */
    private $YEAR;


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
     * Set cDSCODE.
     *
     * @param string $cDSCODE
     *
     * @return RawData
     */
    public function setCDSCODE($cDSCODE)
    {
        $this->CDS_CODE = $cDSCODE;

        return $this;
    }

    /**
     * Get cDSCODE.
     *
     * @return string
     */
    public function getCDSCODE()
    {
        return $this->CDS_CODE;
    }

    /**
     * Set cOUNTY.
     *
     * @param string $cOUNTY
     *
     * @return RawData
     */
    public function setCOUNTY($cOUNTY)
    {
        $this->COUNTY = $cOUNTY;

        return $this;
    }

    /**
     * Get cOUNTY.
     *
     * @return string
     */
    public function getCOUNTY()
    {
        return $this->COUNTY;
    }

    /**
     * Set dISTRICT.
     *
     * @param string $dISTRICT
     *
     * @return RawData
     */
    public function setDISTRICT($dISTRICT)
    {
        $this->DISTRICT = $dISTRICT;

        return $this;
    }

    /**
     * Get dISTRICT.
     *
     * @return string
     */
    public function getDISTRICT()
    {
        return $this->DISTRICT;
    }

    /**
     * Set sCHOOL.
     *
     * @param string $sCHOOL
     *
     * @return RawData
     */
    public function setSCHOOL($sCHOOL)
    {
        $this->SCHOOL = $sCHOOL;

        return $this;
    }

    /**
     * Get sCHOOL.
     *
     * @return string
     */
    public function getSCHOOL()
    {
        return $this->SCHOOL;
    }

    /**
     * Set eTHNIC.
     *
     * @param string $eTHNIC
     *
     * @return RawData
     */
    public function setETHNIC($eTHNIC)
    {
        $this->ETHNIC = $eTHNIC;

        return $this;
    }

    /**
     * Get eTHNIC.
     *
     * @return string
     */
    public function getETHNIC()
    {
        return $this->ETHNIC;
    }

    /**
     * Set gENDER.
     *
     * @param string $gENDER
     *
     * @return RawData
     */
    public function setGENDER($gENDER)
    {
        $this->GENDER = $gENDER;

        return $this;
    }

    /**
     * Get gENDER.
     *
     * @return string
     */
    public function getGENDER()
    {
        return $this->GENDER;
    }

    /**
     * Set kDGN.
     *
     * @param int $kDGN
     *
     * @return RawData
     */
    public function setKDGN($kDGN)
    {
        $this->KDGN = $kDGN;

        return $this;
    }

    /**
     * Get kDGN.
     *
     * @return int
     */
    public function getKDGN()
    {
        return $this->KDGN;
    }

    /**
     * Set gR1.
     *
     * @param int $gR1
     *
     * @return RawData
     */
    public function setGR1($gR1)
    {
        $this->GR_1 = $gR1;

        return $this;
    }

    /**
     * Get gR1.
     *
     * @return int
     */
    public function getGR1()
    {
        return $this->GR_1;
    }

    /**
     * Set gR2.
     *
     * @param int $gR2
     *
     * @return RawData
     */
    public function setGR2($gR2)
    {
        $this->GR_2 = $gR2;

        return $this;
    }

    /**
     * Get gR2.
     *
     * @return int
     */
    public function getGR2()
    {
        return $this->GR_2;
    }

    /**
     * Set gR3.
     *
     * @param int $gR3
     *
     * @return RawData
     */
    public function setGR3($gR3)
    {
        $this->GR_3 = $gR3;

        return $this;
    }

    /**
     * Get gR3.
     *
     * @return int
     */
    public function getGR3()
    {
        return $this->GR_3;
    }

    /**
     * Set gR4.
     *
     * @param int $gR4
     *
     * @return RawData
     */
    public function setGR4($gR4)
    {
        $this->GR_4 = $gR4;

        return $this;
    }

    /**
     * Get gR4.
     *
     * @return int
     */
    public function getGR4()
    {
        return $this->GR_4;
    }

    /**
     * Set gR5.
     *
     * @param int $gR5
     *
     * @return RawData
     */
    public function setGR5($gR5)
    {
        $this->GR_5 = $gR5;

        return $this;
    }

    /**
     * Get gR5.
     *
     * @return int
     */
    public function getGR5()
    {
        return $this->GR_5;
    }

    /**
     * Set gR6.
     *
     * @param int $gR6
     *
     * @return RawData
     */
    public function setGR6($gR6)
    {
        $this->GR_6 = $gR6;

        return $this;
    }

    /**
     * Get gR6.
     *
     * @return int
     */
    public function getGR6()
    {
        return $this->GR_6;
    }

    /**
     * Set gR7.
     *
     * @param int $gR7
     *
     * @return RawData
     */
    public function setGR7($gR7)
    {
        $this->GR_7 = $gR7;

        return $this;
    }

    /**
     * Get gR7.
     *
     * @return int
     */
    public function getGR7()
    {
        return $this->GR_7;
    }

    /**
     * Set gR8.
     *
     * @param int $gR8
     *
     * @return RawData
     */
    public function setGR8($gR8)
    {
        $this->GR_8 = $gR8;

        return $this;
    }

    /**
     * Get gR8.
     *
     * @return int
     */
    public function getGR8()
    {
        return $this->GR_8;
    }

    /**
     * Set gR9.
     *
     * @param int $gR9
     *
     * @return RawData
     */
    public function setGR9($gR9)
    {
        $this->GR_9 = $gR9;

        return $this;
    }

    /**
     * Get gR9.
     *
     * @return int
     */
    public function getGR9()
    {
        return $this->GR_9;
    }

    /**
     * Set gR10.
     *
     * @param int $gR10
     *
     * @return RawData
     */
    public function setGR10($gR10)
    {
        $this->GR_10 = $gR10;

        return $this;
    }

    /**
     * Get gR10.
     *
     * @return int
     */
    public function getGR10()
    {
        return $this->GR_10;
    }

    /**
     * Set gR11.
     *
     * @param int $gR11
     *
     * @return RawData
     */
    public function setGR11($gR11)
    {
        $this->GR_11 = $gR11;

        return $this;
    }

    /**
     * Get gR11.
     *
     * @return int
     */
    public function getGR11()
    {
        return $this->GR_11;
    }

    /**
     * Set gR12.
     *
     * @param int $gR12
     *
     * @return RawData
     */
    public function setGR12($gR12)
    {
        $this->GR_12 = $gR12;

        return $this;
    }

    /**
     * Get gR12.
     *
     * @return int
     */
    public function getGR12()
    {
        return $this->GR_12;
    }

    /**
     * Set uNGRELM.
     *
     * @param int $uNGRELM
     *
     * @return RawData
     */
    public function setUNGRELM($uNGRELM)
    {
        $this->UNGR_ELM = $uNGRELM;

        return $this;
    }

    /**
     * Get uNGRELM.
     *
     * @return int
     */
    public function getUNGRELM()
    {
        return $this->UNGR_ELM;
    }

    /**
     * Set uNGRSEC.
     *
     * @param int $uNGRSEC
     *
     * @return RawData
     */
    public function setUNGRSEC($uNGRSEC)
    {
        $this->UNGR_SEC = $uNGRSEC;

        return $this;
    }

    /**
     * Get uNGRSEC.
     *
     * @return int
     */
    public function getUNGRSEC()
    {
        return $this->UNGR_SEC;
    }

    /**
     * Set eNRTOTAL.
     *
     * @param int $eNRTOTAL
     *
     * @return RawData
     */
    public function setENRTOTAL($eNRTOTAL)
    {
        $this->ENR_TOTAL = $eNRTOTAL;

        return $this;
    }

    /**
     * Get eNRTOTAL.
     *
     * @return int
     */
    public function getENRTOTAL()
    {
        return $this->ENR_TOTAL;
    }

    /**
     * Set aDULT.
     *
     * @param int $aDULT
     *
     * @return RawData
     */
    public function setADULT($aDULT)
    {
        $this->ADULT = $aDULT;

        return $this;
    }

    /**
     * Get aDULT.
     *
     * @return int
     */
    public function getADULT()
    {
        return $this->ADULT;
    }

    /**
     * Set yEAR.
     *
     * @param string $yEAR
     *
     * @return RawData
     */
    public function setYEAR($yEAR)
    {
        $this->YEAR = $yEAR;

        return $this;
    }

    /**
     * Get yEAR.
     *
     * @return string
     */
    public function getYEAR()
    {
        return $this->YEAR;
    }
}

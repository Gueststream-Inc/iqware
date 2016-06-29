<?php

namespace Gueststream\PMS\IQWare\API;

class ExportedRate
{

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var \DateTime $aDate
     */
    protected $aDate = null;

    /**
     * @var float $simple
     */
    protected $simple = null;

    /**
     * @var float $dble
     */
    protected $dble = null;

    /**
     * @var float $triple
     */
    protected $triple = null;

    /**
     * @var float $quad
     */
    protected $quad = null;

    /**
     * @var float $add
     */
    protected $add = null;

    /**
     * @var float $cat1
     */
    protected $cat1 = null;

    /**
     * @var float $cat2
     */
    protected $cat2 = null;

    /**
     * @var float $cat3
     */
    protected $cat3 = null;

    /**
     * @var float $cat4
     */
    protected $cat4 = null;

    /**
     * @var float $simple_yeild
     */
    protected $simple_yeild = null;

    /**
     * @var float $dble_yeild
     */
    protected $dble_yeild = null;

    /**
     * @var float $triple_yeild
     */
    protected $triple_yeild = null;

    /**
     * @var float $quad_yeild
     */
    protected $quad_yeild = null;

    /**
     * @var float $add_yeild
     */
    protected $add_yeild = null;

    /**
     * @var float $cat1_yeild
     */
    protected $cat1_yeild = null;

    /**
     * @var float $cat2_yeild
     */
    protected $cat2_yeild = null;

    /**
     * @var float $cat3_yeild
     */
    protected $cat3_yeild = null;

    /**
     * @var float $cat4_yeild
     */
    protected $cat4_yeild = null;

    /**
     * @param int $ID_RateCode
     * @param int $ID_RoomType
     * @param \DateTime $aDate
     * @param float $simple
     * @param float $dble
     * @param float $triple
     * @param float $quad
     * @param float $add
     * @param float $cat1
     * @param float $cat2
     * @param float $cat3
     * @param float $cat4
     * @param float $simple_yeild
     * @param float $dble_yeild
     * @param float $triple_yeild
     * @param float $quad_yeild
     * @param float $add_yeild
     * @param float $cat1_yeild
     * @param float $cat2_yeild
     * @param float $cat3_yeild
     * @param float $cat4_yeild
     */
    public function __construct($ID_RateCode, $ID_RoomType, \DateTime $aDate, $simple, $dble, $triple, $quad, $add, $cat1, $cat2, $cat3, $cat4, $simple_yeild, $dble_yeild, $triple_yeild, $quad_yeild, $add_yeild, $cat1_yeild, $cat2_yeild, $cat3_yeild, $cat4_yeild)
    {
        $this->ID_RateCode = $ID_RateCode;
        $this->ID_RoomType = $ID_RoomType;
        $this->aDate = $aDate->format(\DateTime::ATOM);
        $this->simple = $simple;
        $this->dble = $dble;
        $this->triple = $triple;
        $this->quad = $quad;
        $this->add = $add;
        $this->cat1 = $cat1;
        $this->cat2 = $cat2;
        $this->cat3 = $cat3;
        $this->cat4 = $cat4;
        $this->simple_yeild = $simple_yeild;
        $this->dble_yeild = $dble_yeild;
        $this->triple_yeild = $triple_yeild;
        $this->quad_yeild = $quad_yeild;
        $this->add_yeild = $add_yeild;
        $this->cat1_yeild = $cat1_yeild;
        $this->cat2_yeild = $cat2_yeild;
        $this->cat3_yeild = $cat3_yeild;
        $this->cat4_yeild = $cat4_yeild;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->aDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->aDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $aDate
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setADate(\DateTime $aDate)
    {
        $this->aDate = $aDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * @param float $simple
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setSimple($simple)
    {
        $this->simple = $simple;
        return $this;
    }

    /**
     * @return float
     */
    public function getDble()
    {
        return $this->dble;
    }

    /**
     * @param float $dble
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setDble($dble)
    {
        $this->dble = $dble;
        return $this;
    }

    /**
     * @return float
     */
    public function getTriple()
    {
        return $this->triple;
    }

    /**
     * @param float $triple
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setTriple($triple)
    {
        $this->triple = $triple;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuad()
    {
        return $this->quad;
    }

    /**
     * @param float $quad
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setQuad($quad)
    {
        $this->quad = $quad;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * @param float $add
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat1()
    {
        return $this->cat1;
    }

    /**
     * @param float $cat1
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat1($cat1)
    {
        $this->cat1 = $cat1;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat2()
    {
        return $this->cat2;
    }

    /**
     * @param float $cat2
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat2($cat2)
    {
        $this->cat2 = $cat2;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat3()
    {
        return $this->cat3;
    }

    /**
     * @param float $cat3
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat3($cat3)
    {
        $this->cat3 = $cat3;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat4()
    {
        return $this->cat4;
    }

    /**
     * @param float $cat4
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat4($cat4)
    {
        $this->cat4 = $cat4;
        return $this;
    }

    /**
     * @return float
     */
    public function getSimple_yeild()
    {
        return $this->simple_yeild;
    }

    /**
     * @param float $simple_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setSimple_yeild($simple_yeild)
    {
        $this->simple_yeild = $simple_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getDble_yeild()
    {
        return $this->dble_yeild;
    }

    /**
     * @param float $dble_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setDble_yeild($dble_yeild)
    {
        $this->dble_yeild = $dble_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getTriple_yeild()
    {
        return $this->triple_yeild;
    }

    /**
     * @param float $triple_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setTriple_yeild($triple_yeild)
    {
        $this->triple_yeild = $triple_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuad_yeild()
    {
        return $this->quad_yeild;
    }

    /**
     * @param float $quad_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setQuad_yeild($quad_yeild)
    {
        $this->quad_yeild = $quad_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdd_yeild()
    {
        return $this->add_yeild;
    }

    /**
     * @param float $add_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setAdd_yeild($add_yeild)
    {
        $this->add_yeild = $add_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat1_yeild()
    {
        return $this->cat1_yeild;
    }

    /**
     * @param float $cat1_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat1_yeild($cat1_yeild)
    {
        $this->cat1_yeild = $cat1_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat2_yeild()
    {
        return $this->cat2_yeild;
    }

    /**
     * @param float $cat2_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat2_yeild($cat2_yeild)
    {
        $this->cat2_yeild = $cat2_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat3_yeild()
    {
        return $this->cat3_yeild;
    }

    /**
     * @param float $cat3_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat3_yeild($cat3_yeild)
    {
        $this->cat3_yeild = $cat3_yeild;
        return $this;
    }

    /**
     * @return float
     */
    public function getCat4_yeild()
    {
        return $this->cat4_yeild;
    }

    /**
     * @param float $cat4_yeild
     * @return \Gueststream\PMS\IQWare\API\ExportedRate
     */
    public function setCat4_yeild($cat4_yeild)
    {
        $this->cat4_yeild = $cat4_yeild;
        return $this;
    }
}

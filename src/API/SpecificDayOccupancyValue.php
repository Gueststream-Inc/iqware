<?php

namespace Gueststream\PMS\IQWare\API;

class SpecificDayOccupancyValue
{

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $SingleOcc
     */
    protected $SingleOcc = null;

    /**
     * @var string $DoubleOcc
     */
    protected $DoubleOcc = null;

    /**
     * @var string $TripleOcc
     */
    protected $TripleOcc = null;

    /**
     * @var string $QuadOcc
     */
    protected $QuadOcc = null;

    /**
     * @var string $Additional
     */
    protected $Additional = null;

    /**
     * @var string $Cat1
     */
    protected $Cat1 = null;

    /**
     * @var string $Cat2
     */
    protected $Cat2 = null;

    /**
     * @var string $Cat3
     */
    protected $Cat3 = null;

    /**
     * @var string $Cat4
     */
    protected $Cat4 = null;

    /**
     * @param \DateTime $BeginDate
     * @param \DateTime $EndDate
     */
    public function __construct(\DateTime $BeginDate, \DateTime $EndDate)
    {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
        if ($this->BeginDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BeginDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BeginDate
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setBeginDate(\DateTime $BeginDate)
    {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getSingleOcc()
    {
        return $this->SingleOcc;
    }

    /**
     * @param string $SingleOcc
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setSingleOcc($SingleOcc)
    {
        $this->SingleOcc = $SingleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoubleOcc()
    {
        return $this->DoubleOcc;
    }

    /**
     * @param string $DoubleOcc
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setDoubleOcc($DoubleOcc)
    {
        $this->DoubleOcc = $DoubleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getTripleOcc()
    {
        return $this->TripleOcc;
    }

    /**
     * @param string $TripleOcc
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setTripleOcc($TripleOcc)
    {
        $this->TripleOcc = $TripleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuadOcc()
    {
        return $this->QuadOcc;
    }

    /**
     * @param string $QuadOcc
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setQuadOcc($QuadOcc)
    {
        $this->QuadOcc = $QuadOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditional()
    {
        return $this->Additional;
    }

    /**
     * @param string $Additional
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setAdditional($Additional)
    {
        $this->Additional = $Additional;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat1()
    {
        return $this->Cat1;
    }

    /**
     * @param string $Cat1
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setCat1($Cat1)
    {
        $this->Cat1 = $Cat1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat2()
    {
        return $this->Cat2;
    }

    /**
     * @param string $Cat2
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setCat2($Cat2)
    {
        $this->Cat2 = $Cat2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat3()
    {
        return $this->Cat3;
    }

    /**
     * @param string $Cat3
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setCat3($Cat3)
    {
        $this->Cat3 = $Cat3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat4()
    {
        return $this->Cat4;
    }

    /**
     * @param string $Cat4
     * @return \Gueststream\PMS\IQWare\API\SpecificDayOccupancyValue
     */
    public function setCat4($Cat4)
    {
        $this->Cat4 = $Cat4;
        return $this;
    }
}

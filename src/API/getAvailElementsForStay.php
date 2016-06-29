<?php

namespace Gueststream\PMS\IQWare\API;

class getAvailElementsForStay
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strLanguage
     */
    protected $strLanguage = null;

    /**
     * @var \DateTime $arrDate
     */
    protected $arrDate = null;

    /**
     * @var \DateTime $depDate
     */
    protected $depDate = null;

    /**
     * @param int $intGUID
     * @param string $strLanguage
     * @param \DateTime $arrDate
     * @param \DateTime $depDate
     */
    public function __construct($intGUID, $strLanguage, \DateTime $arrDate, \DateTime $depDate)
    {
        $this->intGUID = $intGUID;
        $this->strLanguage = $strLanguage;
        $this->arrDate = $arrDate->format(\DateTime::ATOM);
        $this->depDate = $depDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\getAvailElementsForStay
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLanguage()
    {
        return $this->strLanguage;
    }

    /**
     * @param string $strLanguage
     * @return \Gueststream\PMS\IQWare\API\getAvailElementsForStay
     */
    public function setStrLanguage($strLanguage)
    {
        $this->strLanguage = $strLanguage;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrDate()
    {
        if ($this->arrDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->arrDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $arrDate
     * @return \Gueststream\PMS\IQWare\API\getAvailElementsForStay
     */
    public function setArrDate(\DateTime $arrDate)
    {
        $this->arrDate = $arrDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepDate()
    {
        if ($this->depDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->depDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $depDate
     * @return \Gueststream\PMS\IQWare\API\getAvailElementsForStay
     */
    public function setDepDate(\DateTime $depDate)
    {
        $this->depDate = $depDate->format(\DateTime::ATOM);
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerNews
{

    /**
     * @var int $PropertyGuid
     */
    protected $PropertyGuid = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var int $NbCount
     */
    protected $NbCount = null;

    /**
     * @var string $ISOLanguageCode
     */
    protected $ISOLanguageCode = null;

    /**
     * @param int $PropertyGuid
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param int $NbCount
     * @param string $ISOLanguageCode
     */
    public function __construct($PropertyGuid, \DateTime $FromDate, \DateTime $ToDate, $NbCount, $ISOLanguageCode)
    {
        $this->PropertyGuid = $PropertyGuid;
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        $this->NbCount = $NbCount;
        $this->ISOLanguageCode = $ISOLanguageCode;
    }

    /**
     * @return int
     */
    public function getPropertyGuid()
    {
        return $this->PropertyGuid;
    }

    /**
     * @param int $PropertyGuid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNews
     */
    public function setPropertyGuid($PropertyGuid)
    {
        $this->PropertyGuid = $PropertyGuid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        if ($this->FromDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FromDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNews
     */
    public function setFromDate(\DateTime $FromDate)
    {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
        if ($this->ToDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ToDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNews
     */
    public function setToDate(\DateTime $ToDate)
    {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getNbCount()
    {
        return $this->NbCount;
    }

    /**
     * @param int $NbCount
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNews
     */
    public function setNbCount($NbCount)
    {
        $this->NbCount = $NbCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getISOLanguageCode()
    {
        return $this->ISOLanguageCode;
    }

    /**
     * @param string $ISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNews
     */
    public function setISOLanguageCode($ISOLanguageCode)
    {
        $this->ISOLanguageCode = $ISOLanguageCode;
        return $this;
    }
}

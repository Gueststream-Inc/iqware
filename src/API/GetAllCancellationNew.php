<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllCancellationNew
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @param int $GUID
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     */
    public function __construct($GUID, \DateTime $FromDate, \DateTime $ToDate)
    {
        $this->GUID = $GUID;
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationNew
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
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
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationNew
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
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationNew
     */
    public function setToDate(\DateTime $ToDate)
    {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        return $this;
    }
}

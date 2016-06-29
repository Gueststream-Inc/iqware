<?php

namespace Gueststream\PMS\IQWare\API;

class OaccTelephone
{

    /**
     * @var int $PhoneID
     */
    protected $PhoneID = null;

    /**
     * @var int $PhoneType
     */
    protected $PhoneType = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @param int $PhoneID
     * @param int $PhoneType
     */
    public function __construct($PhoneID, $PhoneType)
    {
        $this->PhoneID = $PhoneID;
        $this->PhoneType = $PhoneType;
    }

    /**
     * @return int
     */
    public function getPhoneID()
    {
        return $this->PhoneID;
    }

    /**
     * @param int $PhoneID
     *
*@return \Gueststream\PMS\IQWare\API\OaccTelephone
     */
    public function setPhoneID($PhoneID)
    {
        $this->PhoneID = $PhoneID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneType()
    {
        return $this->PhoneType;
    }

    /**
     * @param int $PhoneType
     *
*@return \Gueststream\PMS\IQWare\API\OaccTelephone
     */
    public function setPhoneType($PhoneType)
    {
        $this->PhoneType = $PhoneType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     *
*@return \Gueststream\PMS\IQWare\API\OaccTelephone
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class cTelephone
{

    /**
     * @var TTelephoneType $PhoneType
     */
    protected $PhoneType = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $PhoneExt
     */
    protected $PhoneExt = null;

    /**
     * @param TTelephoneType $PhoneType
     */
    public function __construct($PhoneType)
    {
        $this->PhoneType = $PhoneType;
    }

    /**
     * @return TTelephoneType
     */
    public function getPhoneType()
    {
        return $this->PhoneType;
    }

    /**
     * @param TTelephoneType $PhoneType
     * @return \Gueststream\PMS\IQWare\API\cTelephone
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
     * @return \Gueststream\PMS\IQWare\API\cTelephone
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneExt()
    {
        return $this->PhoneExt;
    }

    /**
     * @param string $PhoneExt
     * @return \Gueststream\PMS\IQWare\API\cTelephone
     */
    public function setPhoneExt($PhoneExt)
    {
        $this->PhoneExt = $PhoneExt;
        return $this;
    }
}

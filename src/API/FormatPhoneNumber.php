<?php

namespace Gueststream\PMS\IQWare\API;

class FormatPhoneNumber
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var string $phoneNo
     */
    protected $phoneNo = null;

    /**
     * @var string $UnformattedPhone
     */
    protected $UnformattedPhone = null;

    /**
     * @param int $Guid
     * @param string $phoneNo
     * @param string $UnformattedPhone
     */
    public function __construct($Guid, $phoneNo, $UnformattedPhone)
    {
        $this->Guid = $Guid;
        $this->phoneNo = $phoneNo;
        $this->UnformattedPhone = $UnformattedPhone;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\FormatPhoneNumber
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * @param string $phoneNo
     * @return \Gueststream\PMS\IQWare\API\FormatPhoneNumber
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnformattedPhone()
    {
        return $this->UnformattedPhone;
    }

    /**
     * @param string $UnformattedPhone
     * @return \Gueststream\PMS\IQWare\API\FormatPhoneNumber
     */
    public function setUnformattedPhone($UnformattedPhone)
    {
        $this->UnformattedPhone = $UnformattedPhone;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class SetPushID
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var int $ID_PromoCode
     */
    protected $ID_PromoCode = null;

    /**
     * @var string $PushID
     */
    protected $PushID = null;

    /**
     * @param int $PropertyGUID
     * @param int $ID_PromoCode
     * @param string $PushID
     */
    public function __construct($PropertyGUID, $ID_PromoCode, $PushID)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->ID_PromoCode = $ID_PromoCode;
        $this->PushID = $PushID;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\SetPushID
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PromoCode()
    {
        return $this->ID_PromoCode;
    }

    /**
     * @param int $ID_PromoCode
     * @return \Gueststream\PMS\IQWare\API\SetPushID
     */
    public function setID_PromoCode($ID_PromoCode)
    {
        $this->ID_PromoCode = $ID_PromoCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPushID()
    {
        return $this->PushID;
    }

    /**
     * @param string $PushID
     * @return \Gueststream\PMS\IQWare\API\SetPushID
     */
    public function setPushID($PushID)
    {
        $this->PushID = $PushID;
        return $this;
    }
}

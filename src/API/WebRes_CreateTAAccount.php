<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_CreateTAAccount
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var dsNewTA $dsNewTA
     */
    protected $dsNewTA = null;

    /**
     * @param int $intGUID
     * @param dsNewTA $dsNewTA
     */
    public function __construct($intGUID, $dsNewTA)
    {
        $this->intGUID = $intGUID;
        $this->dsNewTA = $dsNewTA;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_CreateTAAccount
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return dsNewTA
     */
    public function getDsNewTA()
    {
        return $this->dsNewTA;
    }

    /**
     * @param dsNewTA $dsNewTA
     * @return \Gueststream\PMS\IQWare\API\WebRes_CreateTAAccount
     */
    public function setDsNewTA($dsNewTA)
    {
        $this->dsNewTA = $dsNewTA;
        return $this;
    }
}

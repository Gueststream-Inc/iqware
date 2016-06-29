<?php

namespace Gueststream\PMS\IQWare\API;

class getElementAgeCatDetail
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intID_AgeCat
     */
    protected $intID_AgeCat = null;

    /**
     * @param int $intGUID
     * @param int $intID_AgeCat
     */
    public function __construct($intGUID, $intID_AgeCat)
    {
        $this->intGUID = $intGUID;
        $this->intID_AgeCat = $intID_AgeCat;
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
     * @return \Gueststream\PMS\IQWare\API\getElementAgeCatDetail
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntID_AgeCat()
    {
        return $this->intID_AgeCat;
    }

    /**
     * @param int $intID_AgeCat
     * @return \Gueststream\PMS\IQWare\API\getElementAgeCatDetail
     */
    public function setIntID_AgeCat($intID_AgeCat)
    {
        $this->intID_AgeCat = $intID_AgeCat;
        return $this;
    }
}

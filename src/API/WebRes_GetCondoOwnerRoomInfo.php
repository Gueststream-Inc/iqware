<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerRoomInfo
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var \DateTime $aDate
     */
    protected $aDate = null;

    /**
     * @param int $intGUID
     * @param string $userName
     * @param string $password
     * @param string $strISOLanguage
     * @param \DateTime $aDate
     */
    public function __construct($intGUID, $userName, $password, $strISOLanguage, \DateTime $aDate)
    {
        $this->intGUID = $intGUID;
        $this->userName = $userName;
        $this->password = $password;
        $this->strISOLanguage = $strISOLanguage;
        $this->aDate = $aDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfo
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfo
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfo
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguage()
    {
        return $this->strISOLanguage;
    }

    /**
     * @param string $strISOLanguage
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfo
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->aDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->aDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $aDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfo
     */
    public function setADate(\DateTime $aDate)
    {
        $this->aDate = $aDate->format(\DateTime::ATOM);
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupInfos
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $strISOLanguageCode
     */
    protected $strISOLanguageCode = null;

    /**
     * @param int $guid
     * @param string $userName
     * @param string $password
     * @param string $strISOLanguageCode
     */
    public function __construct($guid, $userName, $password, $strISOLanguageCode)
    {
        $this->guid = $guid;
        $this->userName = $userName;
        $this->password = $password;
        $this->strISOLanguageCode = $strISOLanguageCode;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfos
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfos
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfos
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguageCode()
    {
        return $this->strISOLanguageCode;
    }

    /**
     * @param string $strISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfos
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
        $this->strISOLanguageCode = $strISOLanguageCode;
        return $this;
    }
}

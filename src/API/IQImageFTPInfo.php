<?php

namespace Gueststream\PMS\IQWare\API;

class IQImageFTPInfo
{

    /**
     * @var string $FtpUrl
     */
    protected $FtpUrl = null;

    /**
     * @var string $FtpUserName
     */
    protected $FtpUserName = null;

    /**
     * @var string $FtpPassword
     */
    protected $FtpPassword = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFtpUrl()
    {
        return $this->FtpUrl;
    }

    /**
     * @param string $FtpUrl
     * @return \Gueststream\PMS\IQWare\API\IQImageFTPInfo
     */
    public function setFtpUrl($FtpUrl)
    {
        $this->FtpUrl = $FtpUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFtpUserName()
    {
        return $this->FtpUserName;
    }

    /**
     * @param string $FtpUserName
     * @return \Gueststream\PMS\IQWare\API\IQImageFTPInfo
     */
    public function setFtpUserName($FtpUserName)
    {
        $this->FtpUserName = $FtpUserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFtpPassword()
    {
        return $this->FtpPassword;
    }

    /**
     * @param string $FtpPassword
     * @return \Gueststream\PMS\IQWare\API\IQImageFTPInfo
     */
    public function setFtpPassword($FtpPassword)
    {
        $this->FtpPassword = $FtpPassword;
        return $this;
    }
}

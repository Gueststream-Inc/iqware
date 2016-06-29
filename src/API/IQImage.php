<?php

namespace Gueststream\PMS\IQWare\API;

class IQImage
{

    /**
     * @var int $ID_Picture
     */
    protected $ID_Picture = null;

    /**
     * @var string $FTP_URL
     */
    protected $FTP_URL = null;

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var int $ID_Code
     */
    protected $ID_Code = null;

    /**
     * @var int $CodeType
     */
    protected $CodeType = null;

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var string $PictureType
     */
    protected $PictureType = null;

    /**
     * @var string $FtpImageName
     */
    protected $FtpImageName = null;

    /**
     * @param int $ID_Picture
     * @param int $PropertyGUID
     * @param int $ID_Code
     * @param int $CodeType
     * @param int $SeqNo
     */
    public function __construct($ID_Picture, $PropertyGUID, $ID_Code, $CodeType, $SeqNo)
    {
        $this->ID_Picture = $ID_Picture;
        $this->PropertyGUID = $PropertyGUID;
        $this->ID_Code = $ID_Code;
        $this->CodeType = $CodeType;
        $this->SeqNo = $SeqNo;
    }

    /**
     * @return int
     */
    public function getID_Picture()
    {
        return $this->ID_Picture;
    }

    /**
     * @param int $ID_Picture
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setID_Picture($ID_Picture)
    {
        $this->ID_Picture = $ID_Picture;
        return $this;
    }

    /**
     * @return string
     */
    public function getFTP_URL()
    {
        return $this->FTP_URL;
    }

    /**
     * @param string $FTP_URL
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setFTP_URL($FTP_URL)
    {
        $this->FTP_URL = $FTP_URL;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Code()
    {
        return $this->ID_Code;
    }

    /**
     * @param int $ID_Code
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setID_Code($ID_Code)
    {
        $this->ID_Code = $ID_Code;
        return $this;
    }

    /**
     * @return int
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param int $CodeType
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setCodeType($CodeType)
    {
        $this->CodeType = $CodeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSeqNo()
    {
        return $this->SeqNo;
    }

    /**
     * @param int $SeqNo
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureType()
    {
        return $this->PictureType;
    }

    /**
     * @param string $PictureType
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setPictureType($PictureType)
    {
        $this->PictureType = $PictureType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFtpImageName()
    {
        return $this->FtpImageName;
    }

    /**
     * @param string $FtpImageName
     * @return \Gueststream\PMS\IQWare\API\IQImage
     */
    public function setFtpImageName($FtpImageName)
    {
        $this->FtpImageName = $FtpImageName;
        return $this;
    }
}

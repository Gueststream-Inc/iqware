<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_isAccPWValid
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intAccNo
     */
    protected $intAccNo = null;

    /**
     * @var string $strPassWord
     */
    protected $strPassWord = null;

    /**
     * @param int $intGUID
     * @param int $intAccNo
     * @param string $strPassWord
     */
    public function __construct($intGUID, $intAccNo, $strPassWord)
    {
        $this->intGUID = $intGUID;
        $this->intAccNo = $intAccNo;
        $this->strPassWord = $strPassWord;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_isAccPWValid
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntAccNo()
    {
        return $this->intAccNo;
    }

    /**
     * @param int $intAccNo
     * @return \Gueststream\PMS\IQWare\API\WebRes_isAccPWValid
     */
    public function setIntAccNo($intAccNo)
    {
        $this->intAccNo = $intAccNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrPassWord()
    {
        return $this->strPassWord;
    }

    /**
     * @param string $strPassWord
     * @return \Gueststream\PMS\IQWare\API\WebRes_isAccPWValid
     */
    public function setStrPassWord($strPassWord)
    {
        $this->strPassWord = $strPassWord;
        return $this;
    }
}

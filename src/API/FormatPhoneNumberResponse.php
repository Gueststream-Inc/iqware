<?php

namespace Gueststream\PMS\IQWare\API;

class FormatPhoneNumberResponse
{

    /**
     * @var string $FormatPhoneNumberResult
     */
    protected $FormatPhoneNumberResult = null;

    /**
     * @param string $FormatPhoneNumberResult
     */
    public function __construct($FormatPhoneNumberResult)
    {
        $this->FormatPhoneNumberResult = $FormatPhoneNumberResult;
    }

    /**
     * @return string
     */
    public function getFormatPhoneNumberResult()
    {
        return $this->FormatPhoneNumberResult;
    }

    /**
     * @param string $FormatPhoneNumberResult
     * @return \Gueststream\PMS\IQWare\API\FormatPhoneNumberResponse
     */
    public function setFormatPhoneNumberResult($FormatPhoneNumberResult)
    {
        $this->FormatPhoneNumberResult = $FormatPhoneNumberResult;
        return $this;
    }
}

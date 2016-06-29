<?php

namespace Gueststream\PMS\IQWare\API;

class SaveGiftCertificateResponse
{

    /**
     * @var SaveGiftCertificateResult $SaveGiftCertificateResult
     */
    protected $SaveGiftCertificateResult = null;

    /**
     * @param SaveGiftCertificateResult $SaveGiftCertificateResult
     */
    public function __construct($SaveGiftCertificateResult)
    {
        $this->SaveGiftCertificateResult = $SaveGiftCertificateResult;
    }

    /**
     * @return SaveGiftCertificateResult
     */
    public function getSaveGiftCertificateResult()
    {
        return $this->SaveGiftCertificateResult;
    }

    /**
     * @param SaveGiftCertificateResult $SaveGiftCertificateResult
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificateResponse
     */
    public function setSaveGiftCertificateResult($SaveGiftCertificateResult)
    {
        $this->SaveGiftCertificateResult = $SaveGiftCertificateResult;
        return $this;
    }
}

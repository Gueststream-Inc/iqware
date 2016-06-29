<?php

namespace Gueststream\PMS\IQWare\API;

class SaveIncentiveGiftCertificateResponse
{

    /**
     * @var SaveIncentiveGiftCertificateResult $SaveIncentiveGiftCertificateResult
     */
    protected $SaveIncentiveGiftCertificateResult = null;

    /**
     * @param SaveIncentiveGiftCertificateResult $SaveIncentiveGiftCertificateResult
     */
    public function __construct($SaveIncentiveGiftCertificateResult)
    {
        $this->SaveIncentiveGiftCertificateResult = $SaveIncentiveGiftCertificateResult;
    }

    /**
     * @return SaveIncentiveGiftCertificateResult
     */
    public function getSaveIncentiveGiftCertificateResult()
    {
        return $this->SaveIncentiveGiftCertificateResult;
    }

    /**
     * @param SaveIncentiveGiftCertificateResult $SaveIncentiveGiftCertificateResult
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificateResponse
     */
    public function setSaveIncentiveGiftCertificateResult($SaveIncentiveGiftCertificateResult)
    {
        $this->SaveIncentiveGiftCertificateResult = $SaveIncentiveGiftCertificateResult;
        return $this;
    }
}

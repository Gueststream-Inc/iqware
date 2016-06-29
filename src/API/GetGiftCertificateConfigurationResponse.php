<?php

namespace Gueststream\PMS\IQWare\API;

class GetGiftCertificateConfigurationResponse
{

    /**
     * @var cGiftCertificate $GetGiftCertificateConfigurationResult
     */
    protected $GetGiftCertificateConfigurationResult = null;

    /**
     * @param cGiftCertificate $GetGiftCertificateConfigurationResult
     */
    public function __construct($GetGiftCertificateConfigurationResult)
    {
        $this->GetGiftCertificateConfigurationResult = $GetGiftCertificateConfigurationResult;
    }

    /**
     * @return cGiftCertificate
     */
    public function getGetGiftCertificateConfigurationResult()
    {
        return $this->GetGiftCertificateConfigurationResult;
    }

    /**
     * @param cGiftCertificate $GetGiftCertificateConfigurationResult
     * @return \Gueststream\PMS\IQWare\API\GetGiftCertificateConfigurationResponse
     */
    public function setGetGiftCertificateConfigurationResult($GetGiftCertificateConfigurationResult)
    {
        $this->GetGiftCertificateConfigurationResult = $GetGiftCertificateConfigurationResult;
        return $this;
    }
}

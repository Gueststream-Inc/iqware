<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetConfigurationResponse
{

    /**
     * @var BeachChairConfig $BeachChairGetConfigurationResult
     */
    protected $BeachChairGetConfigurationResult = null;

    /**
     * @param BeachChairConfig $BeachChairGetConfigurationResult
     */
    public function __construct($BeachChairGetConfigurationResult)
    {
        $this->BeachChairGetConfigurationResult = $BeachChairGetConfigurationResult;
    }

    /**
     * @return BeachChairConfig
     */
    public function getBeachChairGetConfigurationResult()
    {
        return $this->BeachChairGetConfigurationResult;
    }

    /**
     * @param BeachChairConfig $BeachChairGetConfigurationResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetConfigurationResponse
     */
    public function setBeachChairGetConfigurationResult($BeachChairGetConfigurationResult)
    {
        $this->BeachChairGetConfigurationResult = $BeachChairGetConfigurationResult;
        return $this;
    }
}

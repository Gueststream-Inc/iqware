<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TAAdd
{

    /**
     * @var cTravelAgentInfos $TAInfos
     */
    protected $TAInfos = null;

    /**
     * @param cTravelAgentInfos $TAInfos
     */
    public function __construct($TAInfos)
    {
        $this->TAInfos = $TAInfos;
    }

    /**
     * @return cTravelAgentInfos
     */
    public function getTAInfos()
    {
        return $this->TAInfos;
    }

    /**
     * @param cTravelAgentInfos $TAInfos
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TAAdd
     */
    public function setTAInfos($TAInfos)
    {
        $this->TAInfos = $TAInfos;
        return $this;
    }
}

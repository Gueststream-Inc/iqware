<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanyModify
{

    /**
     * @var cCompany $CompInfos
     */
    protected $CompInfos = null;

    /**
     * @param cCompany $CompInfos
     */
    public function __construct($CompInfos)
    {
        $this->CompInfos = $CompInfos;
    }

    /**
     * @return cCompany
     */
    public function getCompInfos()
    {
        return $this->CompInfos;
    }

    /**
     * @param cCompany $CompInfos
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanyModify
     */
    public function setCompInfos($CompInfos)
    {
        $this->CompInfos = $CompInfos;
        return $this;
    }
}

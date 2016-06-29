<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaAddResponse
{

    /**
     * @var int $PMSResaAddResult
     */
    protected $PMSResaAddResult = null;

    /**
     * @param int $PMSResaAddResult
     */
    public function __construct($PMSResaAddResult)
    {
        $this->PMSResaAddResult = $PMSResaAddResult;
    }

    /**
     * @return int
     */
    public function getPMSResaAddResult()
    {
        return $this->PMSResaAddResult;
    }

    /**
     * @param int $PMSResaAddResult
     * @return \Gueststream\PMS\IQWare\API\PMSResaAddResponse
     */
    public function setPMSResaAddResult($PMSResaAddResult)
    {
        $this->PMSResaAddResult = $PMSResaAddResult;
        return $this;
    }
}

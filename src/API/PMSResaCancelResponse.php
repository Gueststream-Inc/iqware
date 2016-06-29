<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaCancelResponse
{

    /**
     * @var int $PMSResaCancelResult
     */
    protected $PMSResaCancelResult = null;

    /**
     * @param int $PMSResaCancelResult
     */
    public function __construct($PMSResaCancelResult)
    {
        $this->PMSResaCancelResult = $PMSResaCancelResult;
    }

    /**
     * @return int
     */
    public function getPMSResaCancelResult()
    {
        return $this->PMSResaCancelResult;
    }

    /**
     * @param int $PMSResaCancelResult
     * @return \Gueststream\PMS\IQWare\API\PMSResaCancelResponse
     */
    public function setPMSResaCancelResult($PMSResaCancelResult)
    {
        $this->PMSResaCancelResult = $PMSResaCancelResult;
        return $this;
    }
}

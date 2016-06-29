<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_InternalCompanyImport
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @param int $AccountNo
     */
    public function __construct($AccountNo)
    {
        $this->AccountNo = $AccountNo;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_InternalCompanyImport
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }
}

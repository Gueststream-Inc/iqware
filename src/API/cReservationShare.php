<?php

namespace Gueststream\PMS\IQWare\API;

class cReservationShare
{

    /**
     * @var int $PrincipalAccountNo
     */
    protected $PrincipalAccountNo = null;

    /**
     * @var ArrayOfInt $AccountNoList
     */
    protected $AccountNoList = null;

    /**
     * @param int $PrincipalAccountNo
     */
    public function __construct($PrincipalAccountNo)
    {
        $this->PrincipalAccountNo = $PrincipalAccountNo;
    }

    /**
     * @return int
     */
    public function getPrincipalAccountNo()
    {
        return $this->PrincipalAccountNo;
    }

    /**
     * @param int $PrincipalAccountNo
     * @return \Gueststream\PMS\IQWare\API\cReservationShare
     */
    public function setPrincipalAccountNo($PrincipalAccountNo)
    {
        $this->PrincipalAccountNo = $PrincipalAccountNo;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAccountNoList()
    {
        return $this->AccountNoList;
    }

    /**
     * @param ArrayOfInt $AccountNoList
     * @return \Gueststream\PMS\IQWare\API\cReservationShare
     */
    public function setAccountNoList($AccountNoList)
    {
        $this->AccountNoList = $AccountNoList;
        return $this;
    }
}

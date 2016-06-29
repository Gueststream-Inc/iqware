<?php

namespace Gueststream\PMS\IQWare\API;

class ChequeTotal
{

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var float $AmountInput
     */
    protected $AmountInput = null;

    /**
     * @param int $ID_Account
     * @param float $AmountInput
     */
    public function __construct($ID_Account, $AmountInput)
    {
        $this->ID_Account = $ID_Account;
        $this->AmountInput = $AmountInput;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\ChequeTotal
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountInput()
    {
        return $this->AmountInput;
    }

    /**
     * @param float $AmountInput
     * @return \Gueststream\PMS\IQWare\API\ChequeTotal
     */
    public function setAmountInput($AmountInput)
    {
        $this->AmountInput = $AmountInput;
        return $this;
    }
}

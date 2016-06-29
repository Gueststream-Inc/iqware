<?php

namespace Gueststream\PMS\IQWare\API;

class cElement
{

    /**
     * @var int $ID_Element
     */
    protected $ID_Element = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $PersonCount
     */
    protected $PersonCount = null;

    /**
     * @var int $AgeCat1
     */
    protected $AgeCat1 = null;

    /**
     * @var int $AgeCat2
     */
    protected $AgeCat2 = null;

    /**
     * @var int $AgeCat3
     */
    protected $AgeCat3 = null;

    /**
     * @var int $AgeCat4
     */
    protected $AgeCat4 = null;

    /**
     * @var int $AgeCat5
     */
    protected $AgeCat5 = null;

    /**
     * @var int $AgeCat6
     */
    protected $AgeCat6 = null;

    /**
     * @var int $AgeCat7
     */
    protected $AgeCat7 = null;

    /**
     * @var int $AgeCat8
     */
    protected $AgeCat8 = null;

    /**
     * @var int $Qty
     */
    protected $Qty = null;

    /**
     * @param int $ID_Element
     * @param \DateTime $Date
     * @param int $PersonCount
     * @param int $AgeCat1
     * @param int $AgeCat2
     * @param int $AgeCat3
     * @param int $AgeCat4
     * @param int $AgeCat5
     * @param int $AgeCat6
     * @param int $AgeCat7
     * @param int $AgeCat8
     * @param int $Qty
     */
    public function __construct($ID_Element, \DateTime $Date, $PersonCount, $AgeCat1, $AgeCat2, $AgeCat3, $AgeCat4, $AgeCat5, $AgeCat6, $AgeCat7, $AgeCat8, $Qty)
    {
        $this->ID_Element = $ID_Element;
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->PersonCount = $PersonCount;
        $this->AgeCat1 = $AgeCat1;
        $this->AgeCat2 = $AgeCat2;
        $this->AgeCat3 = $AgeCat3;
        $this->AgeCat4 = $AgeCat4;
        $this->AgeCat5 = $AgeCat5;
        $this->AgeCat6 = $AgeCat6;
        $this->AgeCat7 = $AgeCat7;
        $this->AgeCat8 = $AgeCat8;
        $this->Qty = $Qty;
    }

    /**
     * @return int
     */
    public function getID_Element()
    {
        return $this->ID_Element;
    }

    /**
     * @param int $ID_Element
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setID_Element($ID_Element)
    {
        $this->ID_Element = $ID_Element;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getPersonCount()
    {
        return $this->PersonCount;
    }

    /**
     * @param int $PersonCount
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setPersonCount($PersonCount)
    {
        $this->PersonCount = $PersonCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat1()
    {
        return $this->AgeCat1;
    }

    /**
     * @param int $AgeCat1
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat1($AgeCat1)
    {
        $this->AgeCat1 = $AgeCat1;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat2()
    {
        return $this->AgeCat2;
    }

    /**
     * @param int $AgeCat2
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat2($AgeCat2)
    {
        $this->AgeCat2 = $AgeCat2;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat3()
    {
        return $this->AgeCat3;
    }

    /**
     * @param int $AgeCat3
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat3($AgeCat3)
    {
        $this->AgeCat3 = $AgeCat3;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat4()
    {
        return $this->AgeCat4;
    }

    /**
     * @param int $AgeCat4
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat4($AgeCat4)
    {
        $this->AgeCat4 = $AgeCat4;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat5()
    {
        return $this->AgeCat5;
    }

    /**
     * @param int $AgeCat5
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat5($AgeCat5)
    {
        $this->AgeCat5 = $AgeCat5;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat6()
    {
        return $this->AgeCat6;
    }

    /**
     * @param int $AgeCat6
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat6($AgeCat6)
    {
        $this->AgeCat6 = $AgeCat6;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat7()
    {
        return $this->AgeCat7;
    }

    /**
     * @param int $AgeCat7
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat7($AgeCat7)
    {
        $this->AgeCat7 = $AgeCat7;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeCat8()
    {
        return $this->AgeCat8;
    }

    /**
     * @param int $AgeCat8
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setAgeCat8($AgeCat8)
    {
        $this->AgeCat8 = $AgeCat8;
        return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->Qty;
    }

    /**
     * @param int $Qty
     * @return \Gueststream\PMS\IQWare\API\cElement
     */
    public function setQty($Qty)
    {
        $this->Qty = $Qty;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class Elements
{

    /**
     * @var int $ID_Element
     */
    protected $ID_Element = null;

    /**
     * @var int $PersonCount
     */
    protected $PersonCount = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $Cat1
     */
    protected $Cat1 = null;

    /**
     * @var int $Cat2
     */
    protected $Cat2 = null;

    /**
     * @var int $Cat3
     */
    protected $Cat3 = null;

    /**
     * @var int $Cat4
     */
    protected $Cat4 = null;

    /**
     * @var int $Cat5
     */
    protected $Cat5 = null;

    /**
     * @var int $Cat6
     */
    protected $Cat6 = null;

    /**
     * @var int $Cat7
     */
    protected $Cat7 = null;

    /**
     * @var int $Cat8
     */
    protected $Cat8 = null;

    /**
     * @param int $ID_Element
     * @param int $PersonCount
     * @param \DateTime $Date
     * @param int $Cat1
     * @param int $Cat2
     * @param int $Cat3
     * @param int $Cat4
     * @param int $Cat5
     * @param int $Cat6
     * @param int $Cat7
     * @param int $Cat8
     */
    public function __construct($ID_Element, $PersonCount, \DateTime $Date, $Cat1, $Cat2, $Cat3, $Cat4, $Cat5, $Cat6, $Cat7, $Cat8)
    {
        $this->ID_Element = $ID_Element;
        $this->PersonCount = $PersonCount;
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->Cat1 = $Cat1;
        $this->Cat2 = $Cat2;
        $this->Cat3 = $Cat3;
        $this->Cat4 = $Cat4;
        $this->Cat5 = $Cat5;
        $this->Cat6 = $Cat6;
        $this->Cat7 = $Cat7;
        $this->Cat8 = $Cat8;
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
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setID_Element($ID_Element)
    {
        $this->ID_Element = $ID_Element;
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
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setPersonCount($PersonCount)
    {
        $this->PersonCount = $PersonCount;
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
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getCat1()
    {
        return $this->Cat1;
    }

    /**
     * @param int $Cat1
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat1($Cat1)
    {
        $this->Cat1 = $Cat1;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat2()
    {
        return $this->Cat2;
    }

    /**
     * @param int $Cat2
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat2($Cat2)
    {
        $this->Cat2 = $Cat2;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat3()
    {
        return $this->Cat3;
    }

    /**
     * @param int $Cat3
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat3($Cat3)
    {
        $this->Cat3 = $Cat3;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat4()
    {
        return $this->Cat4;
    }

    /**
     * @param int $Cat4
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat4($Cat4)
    {
        $this->Cat4 = $Cat4;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat5()
    {
        return $this->Cat5;
    }

    /**
     * @param int $Cat5
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat5($Cat5)
    {
        $this->Cat5 = $Cat5;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat6()
    {
        return $this->Cat6;
    }

    /**
     * @param int $Cat6
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat6($Cat6)
    {
        $this->Cat6 = $Cat6;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat7()
    {
        return $this->Cat7;
    }

    /**
     * @param int $Cat7
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat7($Cat7)
    {
        $this->Cat7 = $Cat7;
        return $this;
    }

    /**
     * @return int
     */
    public function getCat8()
    {
        return $this->Cat8;
    }

    /**
     * @param int $Cat8
     * @return \Gueststream\PMS\IQWare\API\Elements
     */
    public function setCat8($Cat8)
    {
        $this->Cat8 = $Cat8;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class cProfil
{

    /**
     * @var int $ID_SrcBusiness
     */
    protected $ID_SrcBusiness = null;

    /**
     * @var int $ID_GuestType
     */
    protected $ID_GuestType = null;

    /**
     * @var int $ID_Geographic
     */
    protected $ID_Geographic = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @param int $ID_SrcBusiness
     * @param int $ID_GuestType
     * @param int $ID_Geographic
     */
    public function __construct($ID_SrcBusiness, $ID_GuestType, $ID_Geographic)
    {
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        $this->ID_GuestType = $ID_GuestType;
        $this->ID_Geographic = $ID_Geographic;
    }

    /**
     * @return int
     */
    public function getID_SrcBusiness()
    {
        return $this->ID_SrcBusiness;
    }

    /**
     * @param int $ID_SrcBusiness
     * @return \Gueststream\PMS\IQWare\API\cProfil
     */
    public function setID_SrcBusiness($ID_SrcBusiness)
    {
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GuestType()
    {
        return $this->ID_GuestType;
    }

    /**
     * @param int $ID_GuestType
     * @return \Gueststream\PMS\IQWare\API\cProfil
     */
    public function setID_GuestType($ID_GuestType)
    {
        $this->ID_GuestType = $ID_GuestType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Geographic()
    {
        return $this->ID_Geographic;
    }

    /**
     * @param int $ID_Geographic
     * @return \Gueststream\PMS\IQWare\API\cProfil
     */
    public function setID_Geographic($ID_Geographic)
    {
        $this->ID_Geographic = $ID_Geographic;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Gueststream\PMS\IQWare\API\cProfil
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
        return $this;
    }
}

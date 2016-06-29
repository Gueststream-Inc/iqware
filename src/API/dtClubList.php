<?php

namespace Gueststream\PMS\IQWare\API;

class dtClubList
{

    /**
     * @var int $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @var string $ClubName
     */
    protected $ClubName = null;

    /**
     * @var int $ClubLevelNo
     */
    protected $ClubLevelNo = null;

    /**
     * @var string $ClubLevelName
     */
    protected $ClubLevelName = null;

    /**
     * @var int $MinLevelPoint
     */
    protected $MinLevelPoint = null;

    /**
     * @param int $ClubNo
     * @param string $ClubName
     * @param int $ClubLevelNo
     * @param string $ClubLevelName
     * @param int $MinLevelPoint
     */
    public function __construct($ClubNo, $ClubName, $ClubLevelNo, $ClubLevelName, $MinLevelPoint)
    {
        $this->ClubNo = $ClubNo;
        $this->ClubName = $ClubName;
        $this->ClubLevelNo = $ClubLevelNo;
        $this->ClubLevelName = $ClubLevelName;
        $this->MinLevelPoint = $MinLevelPoint;
    }

    /**
     * @return int
     */
    public function getClubNo()
    {
        return $this->ClubNo;
    }

    /**
     * @param int $ClubNo
     * @return \Gueststream\PMS\IQWare\API\dtClubList
     */
    public function setClubNo($ClubNo)
    {
        $this->ClubNo = $ClubNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubName()
    {
        return $this->ClubName;
    }

    /**
     * @param string $ClubName
     * @return \Gueststream\PMS\IQWare\API\dtClubList
     */
    public function setClubName($ClubName)
    {
        $this->ClubName = $ClubName;
        return $this;
    }

    /**
     * @return int
     */
    public function getClubLevelNo()
    {
        return $this->ClubLevelNo;
    }

    /**
     * @param int $ClubLevelNo
     * @return \Gueststream\PMS\IQWare\API\dtClubList
     */
    public function setClubLevelNo($ClubLevelNo)
    {
        $this->ClubLevelNo = $ClubLevelNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubLevelName()
    {
        return $this->ClubLevelName;
    }

    /**
     * @param string $ClubLevelName
     * @return \Gueststream\PMS\IQWare\API\dtClubList
     */
    public function setClubLevelName($ClubLevelName)
    {
        $this->ClubLevelName = $ClubLevelName;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLevelPoint()
    {
        return $this->MinLevelPoint;
    }

    /**
     * @param int $MinLevelPoint
     * @return \Gueststream\PMS\IQWare\API\dtClubList
     */
    public function setMinLevelPoint($MinLevelPoint)
    {
        $this->MinLevelPoint = $MinLevelPoint;
        return $this;
    }
}

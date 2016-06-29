<?php

namespace Gueststream\PMS\IQWare\API;

class dtClubMemberList
{

    /**
     * @var string $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @var string $ClubName
     */
    protected $ClubName = null;

    /**
     * @var string $ClubLevelName
     */
    protected $ClubLevelName = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $AccumTotal
     */
    protected $AccumTotal = null;

    /**
     * @var string $ExpenseTotal
     */
    protected $ExpenseTotal = null;

    /**
     * @var \DateTime $MemberSince
     */
    protected $MemberSince = null;

    /**
     * @param string $MemberNo
     * @param string $LastName
     * @param string $FirstName
     * @param string $ClubNo
     * @param string $ClubName
     * @param string $ClubLevelName
     * @param string $CardNumber
     * @param string $AccumTotal
     * @param string $ExpenseTotal
     * @param \DateTime $MemberSince
     */
    public function __construct($MemberNo, $LastName, $FirstName, $ClubNo, $ClubName, $ClubLevelName, $CardNumber, $AccumTotal, $ExpenseTotal, \DateTime $MemberSince)
    {
        $this->MemberNo = $MemberNo;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->ClubNo = $ClubNo;
        $this->ClubName = $ClubName;
        $this->ClubLevelName = $ClubLevelName;
        $this->CardNumber = $CardNumber;
        $this->AccumTotal = $AccumTotal;
        $this->ExpenseTotal = $ExpenseTotal;
        $this->MemberSince = $MemberSince->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param string $MemberNo
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubNo()
    {
        return $this->ClubNo;
    }

    /**
     * @param string $ClubNo
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
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
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setClubName($ClubName)
    {
        $this->ClubName = $ClubName;
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
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setClubLevelName($ClubLevelName)
    {
        $this->ClubLevelName = $ClubLevelName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccumTotal()
    {
        return $this->AccumTotal;
    }

    /**
     * @param string $AccumTotal
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setAccumTotal($AccumTotal)
    {
        $this->AccumTotal = $AccumTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseTotal()
    {
        return $this->ExpenseTotal;
    }

    /**
     * @param string $ExpenseTotal
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setExpenseTotal($ExpenseTotal)
    {
        $this->ExpenseTotal = $ExpenseTotal;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMemberSince()
    {
        if ($this->MemberSince == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->MemberSince);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $MemberSince
     * @return \Gueststream\PMS\IQWare\API\dtClubMemberList
     */
    public function setMemberSince(\DateTime $MemberSince)
    {
        $this->MemberSince = $MemberSince->format(\DateTime::ATOM);
        return $this;
    }
}

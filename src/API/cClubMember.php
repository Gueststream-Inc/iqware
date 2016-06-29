<?php

namespace Gueststream\PMS\IQWare\API;

class cClubMember
{

    /**
     * @var int $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var int $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @var int $ClubLevelNo
     */
    protected $ClubLevelNo = null;

    /**
     * @var string $CardPrefixGUID
     */
    protected $CardPrefixGUID = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var int $AccumTotal
     */
    protected $AccumTotal = null;

    /**
     * @var int $ExpenseTotal
     */
    protected $ExpenseTotal = null;

    /**
     * @var \DateTime $MemberSince
     */
    protected $MemberSince = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @param int $MemberNo
     * @param int $ClubNo
     * @param int $ClubLevelNo
     * @param int $AccumTotal
     * @param int $ExpenseTotal
     * @param \DateTime $MemberSince
     * @param boolean $IsActive
     */
    public function __construct($MemberNo, $ClubNo, $ClubLevelNo, $AccumTotal, $ExpenseTotal, \DateTime $MemberSince, $IsActive)
    {
        $this->MemberNo = $MemberNo;
        $this->ClubNo = $ClubNo;
        $this->ClubLevelNo = $ClubLevelNo;
        $this->AccumTotal = $AccumTotal;
        $this->ExpenseTotal = $ExpenseTotal;
        $this->MemberSince = $MemberSince->format(\DateTime::ATOM);
        $this->IsActive = $IsActive;
    }

    /**
     * @return int
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param int $MemberNo
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setClubNo($ClubNo)
    {
        $this->ClubNo = $ClubNo;
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
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setClubLevelNo($ClubLevelNo)
    {
        $this->ClubLevelNo = $ClubLevelNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardPrefixGUID()
    {
        return $this->CardPrefixGUID;
    }

    /**
     * @param string $CardPrefixGUID
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setCardPrefixGUID($CardPrefixGUID)
    {
        $this->CardPrefixGUID = $CardPrefixGUID;
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
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccumTotal()
    {
        return $this->AccumTotal;
    }

    /**
     * @param int $AccumTotal
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setAccumTotal($AccumTotal)
    {
        $this->AccumTotal = $AccumTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpenseTotal()
    {
        return $this->ExpenseTotal;
    }

    /**
     * @param int $ExpenseTotal
     * @return \Gueststream\PMS\IQWare\API\cClubMember
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
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setMemberSince(\DateTime $MemberSince)
    {
        $this->MemberSince = $MemberSince->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Gueststream\PMS\IQWare\API\cClubMember
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class cComments
{

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var string $ComDescription
     */
    protected $ComDescription = null;

    /**
     * @var TCommentStatus $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $DateComIn
     */
    protected $DateComIn = null;

    /**
     * @var int $ID_UserComIn
     */
    protected $ID_UserComIn = null;

    /**
     * @var string $UserNameComIn
     */
    protected $UserNameComIn = null;

    /**
     * @var \DateTime $DateComDelivered
     */
    protected $DateComDelivered = null;

    /**
     * @var int $ID_UserComDelivered
     */
    protected $ID_UserComDelivered = null;

    /**
     * @var string $UserNameComDelivered
     */
    protected $UserNameComDelivered = null;

    /**
     * @param int $SeqNo
     * @param TCommentStatus $Status
     * @param \DateTime $DateComIn
     * @param int $ID_UserComIn
     * @param \DateTime $DateComDelivered
     * @param int $ID_UserComDelivered
     */
    public function __construct($SeqNo, $Status, \DateTime $DateComIn, $ID_UserComIn, \DateTime $DateComDelivered, $ID_UserComDelivered)
    {
        $this->SeqNo = $SeqNo;
        $this->Status = $Status;
        $this->DateComIn = $DateComIn->format(\DateTime::ATOM);
        $this->ID_UserComIn = $ID_UserComIn;
        $this->DateComDelivered = $DateComDelivered->format(\DateTime::ATOM);
        $this->ID_UserComDelivered = $ID_UserComDelivered;
    }

    /**
     * @return int
     */
    public function getSeqNo()
    {
        return $this->SeqNo;
    }

    /**
     * @param int $SeqNo
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getComDescription()
    {
        return $this->ComDescription;
    }

    /**
     * @param string $ComDescription
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setComDescription($ComDescription)
    {
        $this->ComDescription = $ComDescription;
        return $this;
    }

    /**
     * @return TCommentStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param TCommentStatus $Status
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateComIn()
    {
        if ($this->DateComIn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateComIn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateComIn
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setDateComIn(\DateTime $DateComIn)
    {
        $this->DateComIn = $DateComIn->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_UserComIn()
    {
        return $this->ID_UserComIn;
    }

    /**
     * @param int $ID_UserComIn
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setID_UserComIn($ID_UserComIn)
    {
        $this->ID_UserComIn = $ID_UserComIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserNameComIn()
    {
        return $this->UserNameComIn;
    }

    /**
     * @param string $UserNameComIn
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setUserNameComIn($UserNameComIn)
    {
        $this->UserNameComIn = $UserNameComIn;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateComDelivered()
    {
        if ($this->DateComDelivered == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateComDelivered);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateComDelivered
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setDateComDelivered(\DateTime $DateComDelivered)
    {
        $this->DateComDelivered = $DateComDelivered->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_UserComDelivered()
    {
        return $this->ID_UserComDelivered;
    }

    /**
     * @param int $ID_UserComDelivered
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setID_UserComDelivered($ID_UserComDelivered)
    {
        $this->ID_UserComDelivered = $ID_UserComDelivered;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserNameComDelivered()
    {
        return $this->UserNameComDelivered;
    }

    /**
     * @param string $UserNameComDelivered
     * @return \Gueststream\PMS\IQWare\API\cComments
     */
    public function setUserNameComDelivered($UserNameComDelivered)
    {
        $this->UserNameComDelivered = $UserNameComDelivered;
        return $this;
    }
}

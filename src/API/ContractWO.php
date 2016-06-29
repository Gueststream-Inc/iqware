<?php

namespace Gueststream\PMS\IQWare\API;

class ContractWO
{

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var string $ToDoActionName
     */
    protected $ToDoActionName = null;

    /**
     * @var string $BuildingName
     */
    protected $BuildingName = null;

    /**
     * @var int $WorkOrderNo
     */
    protected $WorkOrderNo = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $DateTodo
     */
    protected $DateTodo = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var boolean $IsHistory
     */
    protected $IsHistory = null;

    /**
     * @var int $IDUserToDoIn
     */
    protected $IDUserToDoIn = null;

    /**
     * @var \DateTime $DateTodoIn
     */
    protected $DateTodoIn = null;

    /**
     * @var int $ID_UserTodoModif
     */
    protected $ID_UserTodoModif = null;

    /**
     * @var \DateTime $DateTodoModif
     */
    protected $DateTodoModif = null;

    /**
     * @var int $ID_UserTodoCompleted
     */
    protected $ID_UserTodoCompleted = null;

    /**
     * @var \DateTime $DateTodoCompleted
     */
    protected $DateTodoCompleted = null;

    /**
     * @var string $ExecutedBy
     */
    protected $ExecutedBy = null;

    /**
     * @var \DateTime $DateTodoStarted
     */
    protected $DateTodoStarted = null;

    /**
     * @var int $ID_OwnerAdmin
     */
    protected $ID_OwnerAdmin = null;

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var float $AmountParts
     */
    protected $AmountParts = null;

    /**
     * @var float $AmountLabor
     */
    protected $AmountLabor = null;

    /**
     * @var float $AmountTaxParts
     */
    protected $AmountTaxParts = null;

    /**
     * @var float $AmountTaxLabor
     */
    protected $AmountTaxLabor = null;

    /**
     * @var int $MarkupTypeParts
     */
    protected $MarkupTypeParts = null;

    /**
     * @var float $MarkupValueParts
     */
    protected $MarkupValueParts = null;

    /**
     * @var int $MarkupTypeLabor
     */
    protected $MarkupTypeLabor = null;

    /**
     * @var float $MarkupValueLabor
     */
    protected $MarkupValueLabor = null;

    /**
     * @var boolean $MarkupPartsIsActive
     */
    protected $MarkupPartsIsActive = null;

    /**
     * @var boolean $MarkupLaborIsActive
     */
    protected $MarkupLaborIsActive = null;

    /**
     * @var \DateTime $FiscalDate
     */
    protected $FiscalDate = null;

    /**
     * @var boolean $IsCompletedByMtn
     */
    protected $IsCompletedByMtn = null;

    /**
     * @var \DateTime $DateFirstPrintMtn
     */
    protected $DateFirstPrintMtn = null;

    /**
     * @var \DateTime $DateFirstPrintAcct
     */
    protected $DateFirstPrintAcct = null;

    /**
     * @var \DateTime $DateLastRePrintMtn
     */
    protected $DateLastRePrintMtn = null;

    /**
     * @var \DateTime $DateLastRePrintAcct
     */
    protected $DateLastRePrintAcct = null;

    /**
     * @var int $SubFolio
     */
    protected $SubFolio = null;

    /**
     * @var int $AccountType
     */
    protected $AccountType = null;

    /**
     * @var string $TechnicalNote
     */
    protected $TechnicalNote = null;

    /**
     * @var float $AmountSupplier
     */
    protected $AmountSupplier = null;

    /**
     * @var float $AmountTaxSupplier
     */
    protected $AmountTaxSupplier = null;

    /**
     * @var int $MarkupTypeSupplier
     */
    protected $MarkupTypeSupplier = null;

    /**
     * @var float $MarkupValueSupplier
     */
    protected $MarkupValueSupplier = null;

    /**
     * @var boolean $MarkupSupplierIsActive
     */
    protected $MarkupSupplierIsActive = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var string $RequestedBy
     */
    protected $RequestedBy = null;

    /**
     * @var float $AmountTaxGlobal
     */
    protected $AmountTaxGlobal = null;

    /**
     * @var int $PostingTaxType
     */
    protected $PostingTaxType = null;

    /**
     * @var int $PostingType
     */
    protected $PostingType = null;

    /**
     * @var int $MarkupModeParts
     */
    protected $MarkupModeParts = null;

    /**
     * @var int $MarkupModeLabor
     */
    protected $MarkupModeLabor = null;

    /**
     * @var int $MarkupModeSupplier
     */
    protected $MarkupModeSupplier = null;

    /**
     * @var string $ChargeTo
     */
    protected $ChargeTo = null;

    /**
     * @var string $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var boolean $IsAnnualMaintenance
     */
    protected $IsAnnualMaintenance = null;

    /**
     * @var ContractWOBillDetail $ContractWOBillDetail
     */
    protected $ContractWOBillDetail = null;

    /**
     * @var int $OwnerContracts_Id
     */
    protected $OwnerContracts_Id = null;

    /**
     * @param int $SeqNo
     * @param int $ID_Room
     * @param string $RoomNo
     * @param string $ToDoActionName
     * @param string $BuildingName
     * @param int $WorkOrderNo
     * @param int $Status
     * @param \DateTime $DateTodo
     * @param string $Description
     * @param string $Comment
     * @param boolean $IsHistory
     * @param int $IDUserToDoIn
     * @param \DateTime $DateTodoIn
     * @param int $ID_UserTodoModif
     * @param \DateTime $DateTodoModif
     * @param int $ID_UserTodoCompleted
     * @param \DateTime $DateTodoCompleted
     * @param string $ExecutedBy
     * @param \DateTime $DateTodoStarted
     * @param int $ID_OwnerAdmin
     * @param boolean $IsPosted
     * @param float $AmountParts
     * @param float $AmountLabor
     * @param float $AmountTaxParts
     * @param float $AmountTaxLabor
     * @param int $MarkupTypeParts
     * @param float $MarkupValueParts
     * @param int $MarkupTypeLabor
     * @param float $MarkupValueLabor
     * @param boolean $MarkupPartsIsActive
     * @param boolean $MarkupLaborIsActive
     * @param \DateTime $FiscalDate
     * @param boolean $IsCompletedByMtn
     * @param \DateTime $DateFirstPrintMtn
     * @param \DateTime $DateFirstPrintAcct
     * @param \DateTime $DateLastRePrintMtn
     * @param \DateTime $DateLastRePrintAcct
     * @param int $SubFolio
     * @param int $AccountType
     * @param string $TechnicalNote
     * @param float $AmountSupplier
     * @param float $AmountTaxSupplier
     * @param int $MarkupTypeSupplier
     * @param float $MarkupValueSupplier
     * @param boolean $MarkupSupplierIsActive
     * @param int $Priority
     * @param string $RequestedBy
     * @param float $AmountTaxGlobal
     * @param int $PostingTaxType
     * @param int $PostingType
     * @param int $MarkupModeParts
     * @param int $MarkupModeLabor
     * @param int $MarkupModeSupplier
     * @param string $ChargeTo
     * @param string $AccountStatus
     * @param boolean $IsAnnualMaintenance
     * @param ContractWOBillDetail $ContractWOBillDetail
     * @param int $OwnerContracts_Id
     */
    public function __construct($SeqNo, $ID_Room, $RoomNo, $ToDoActionName, $BuildingName, $WorkOrderNo, $Status, \DateTime $DateTodo, $Description, $Comment, $IsHistory, $IDUserToDoIn, \DateTime $DateTodoIn, $ID_UserTodoModif, \DateTime $DateTodoModif, $ID_UserTodoCompleted, \DateTime $DateTodoCompleted, $ExecutedBy, \DateTime $DateTodoStarted, $ID_OwnerAdmin, $IsPosted, $AmountParts, $AmountLabor, $AmountTaxParts, $AmountTaxLabor, $MarkupTypeParts, $MarkupValueParts, $MarkupTypeLabor, $MarkupValueLabor, $MarkupPartsIsActive, $MarkupLaborIsActive, \DateTime $FiscalDate, $IsCompletedByMtn, \DateTime $DateFirstPrintMtn, \DateTime $DateFirstPrintAcct, \DateTime $DateLastRePrintMtn, \DateTime $DateLastRePrintAcct, $SubFolio, $AccountType, $TechnicalNote, $AmountSupplier, $AmountTaxSupplier, $MarkupTypeSupplier, $MarkupValueSupplier, $MarkupSupplierIsActive, $Priority, $RequestedBy, $AmountTaxGlobal, $PostingTaxType, $PostingType, $MarkupModeParts, $MarkupModeLabor, $MarkupModeSupplier, $ChargeTo, $AccountStatus, $IsAnnualMaintenance, $ContractWOBillDetail, $OwnerContracts_Id)
    {
        $this->SeqNo = $SeqNo;
        $this->ID_Room = $ID_Room;
        $this->RoomNo = $RoomNo;
        $this->ToDoActionName = $ToDoActionName;
        $this->BuildingName = $BuildingName;
        $this->WorkOrderNo = $WorkOrderNo;
        $this->Status = $Status;
        $this->DateTodo = $DateTodo->format(\DateTime::ATOM);
        $this->Description = $Description;
        $this->Comment = $Comment;
        $this->IsHistory = $IsHistory;
        $this->IDUserToDoIn = $IDUserToDoIn;
        $this->DateTodoIn = $DateTodoIn->format(\DateTime::ATOM);
        $this->ID_UserTodoModif = $ID_UserTodoModif;
        $this->DateTodoModif = $DateTodoModif->format(\DateTime::ATOM);
        $this->ID_UserTodoCompleted = $ID_UserTodoCompleted;
        $this->DateTodoCompleted = $DateTodoCompleted->format(\DateTime::ATOM);
        $this->ExecutedBy = $ExecutedBy;
        $this->DateTodoStarted = $DateTodoStarted->format(\DateTime::ATOM);
        $this->ID_OwnerAdmin = $ID_OwnerAdmin;
        $this->IsPosted = $IsPosted;
        $this->AmountParts = $AmountParts;
        $this->AmountLabor = $AmountLabor;
        $this->AmountTaxParts = $AmountTaxParts;
        $this->AmountTaxLabor = $AmountTaxLabor;
        $this->MarkupTypeParts = $MarkupTypeParts;
        $this->MarkupValueParts = $MarkupValueParts;
        $this->MarkupTypeLabor = $MarkupTypeLabor;
        $this->MarkupValueLabor = $MarkupValueLabor;
        $this->MarkupPartsIsActive = $MarkupPartsIsActive;
        $this->MarkupLaborIsActive = $MarkupLaborIsActive;
        $this->FiscalDate = $FiscalDate->format(\DateTime::ATOM);
        $this->IsCompletedByMtn = $IsCompletedByMtn;
        $this->DateFirstPrintMtn = $DateFirstPrintMtn->format(\DateTime::ATOM);
        $this->DateFirstPrintAcct = $DateFirstPrintAcct->format(\DateTime::ATOM);
        $this->DateLastRePrintMtn = $DateLastRePrintMtn->format(\DateTime::ATOM);
        $this->DateLastRePrintAcct = $DateLastRePrintAcct->format(\DateTime::ATOM);
        $this->SubFolio = $SubFolio;
        $this->AccountType = $AccountType;
        $this->TechnicalNote = $TechnicalNote;
        $this->AmountSupplier = $AmountSupplier;
        $this->AmountTaxSupplier = $AmountTaxSupplier;
        $this->MarkupTypeSupplier = $MarkupTypeSupplier;
        $this->MarkupValueSupplier = $MarkupValueSupplier;
        $this->MarkupSupplierIsActive = $MarkupSupplierIsActive;
        $this->Priority = $Priority;
        $this->RequestedBy = $RequestedBy;
        $this->AmountTaxGlobal = $AmountTaxGlobal;
        $this->PostingTaxType = $PostingTaxType;
        $this->PostingType = $PostingType;
        $this->MarkupModeParts = $MarkupModeParts;
        $this->MarkupModeLabor = $MarkupModeLabor;
        $this->MarkupModeSupplier = $MarkupModeSupplier;
        $this->ChargeTo = $ChargeTo;
        $this->AccountStatus = $AccountStatus;
        $this->IsAnnualMaintenance = $IsAnnualMaintenance;
        $this->ContractWOBillDetail = $ContractWOBillDetail;
        $this->OwnerContracts_Id = $OwnerContracts_Id;
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
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getToDoActionName()
    {
        return $this->ToDoActionName;
    }

    /**
     * @param string $ToDoActionName
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setToDoActionName($ToDoActionName)
    {
        $this->ToDoActionName = $ToDoActionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->BuildingName;
    }

    /**
     * @param string $BuildingName
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setBuildingName($BuildingName)
    {
        $this->BuildingName = $BuildingName;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkOrderNo()
    {
        return $this->WorkOrderNo;
    }

    /**
     * @param int $WorkOrderNo
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setWorkOrderNo($WorkOrderNo)
    {
        $this->WorkOrderNo = $WorkOrderNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param int $Status
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTodo()
    {
        if ($this->DateTodo == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateTodo);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTodo
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateTodo(\DateTime $DateTodo)
    {
        $this->DateTodo = $DateTodo->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHistory()
    {
        return $this->IsHistory;
    }

    /**
     * @param boolean $IsHistory
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setIsHistory($IsHistory)
    {
        $this->IsHistory = $IsHistory;
        return $this;
    }

    /**
     * @return int
     */
    public function getIDUserToDoIn()
    {
        return $this->IDUserToDoIn;
    }

    /**
     * @param int $IDUserToDoIn
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setIDUserToDoIn($IDUserToDoIn)
    {
        $this->IDUserToDoIn = $IDUserToDoIn;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTodoIn()
    {
        if ($this->DateTodoIn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateTodoIn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTodoIn
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateTodoIn(\DateTime $DateTodoIn)
    {
        $this->DateTodoIn = $DateTodoIn->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_UserTodoModif()
    {
        return $this->ID_UserTodoModif;
    }

    /**
     * @param int $ID_UserTodoModif
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setID_UserTodoModif($ID_UserTodoModif)
    {
        $this->ID_UserTodoModif = $ID_UserTodoModif;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTodoModif()
    {
        if ($this->DateTodoModif == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateTodoModif);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTodoModif
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateTodoModif(\DateTime $DateTodoModif)
    {
        $this->DateTodoModif = $DateTodoModif->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_UserTodoCompleted()
    {
        return $this->ID_UserTodoCompleted;
    }

    /**
     * @param int $ID_UserTodoCompleted
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setID_UserTodoCompleted($ID_UserTodoCompleted)
    {
        $this->ID_UserTodoCompleted = $ID_UserTodoCompleted;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTodoCompleted()
    {
        if ($this->DateTodoCompleted == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateTodoCompleted);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTodoCompleted
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateTodoCompleted(\DateTime $DateTodoCompleted)
    {
        $this->DateTodoCompleted = $DateTodoCompleted->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutedBy()
    {
        return $this->ExecutedBy;
    }

    /**
     * @param string $ExecutedBy
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setExecutedBy($ExecutedBy)
    {
        $this->ExecutedBy = $ExecutedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTodoStarted()
    {
        if ($this->DateTodoStarted == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateTodoStarted);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTodoStarted
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateTodoStarted(\DateTime $DateTodoStarted)
    {
        $this->DateTodoStarted = $DateTodoStarted->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_OwnerAdmin()
    {
        return $this->ID_OwnerAdmin;
    }

    /**
     * @param int $ID_OwnerAdmin
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setID_OwnerAdmin($ID_OwnerAdmin)
    {
        $this->ID_OwnerAdmin = $ID_OwnerAdmin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
        return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setIsPosted($IsPosted)
    {
        $this->IsPosted = $IsPosted;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountParts()
    {
        return $this->AmountParts;
    }

    /**
     * @param float $AmountParts
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountParts($AmountParts)
    {
        $this->AmountParts = $AmountParts;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountLabor()
    {
        return $this->AmountLabor;
    }

    /**
     * @param float $AmountLabor
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountLabor($AmountLabor)
    {
        $this->AmountLabor = $AmountLabor;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTaxParts()
    {
        return $this->AmountTaxParts;
    }

    /**
     * @param float $AmountTaxParts
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountTaxParts($AmountTaxParts)
    {
        $this->AmountTaxParts = $AmountTaxParts;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTaxLabor()
    {
        return $this->AmountTaxLabor;
    }

    /**
     * @param float $AmountTaxLabor
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountTaxLabor($AmountTaxLabor)
    {
        $this->AmountTaxLabor = $AmountTaxLabor;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupTypeParts()
    {
        return $this->MarkupTypeParts;
    }

    /**
     * @param int $MarkupTypeParts
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupTypeParts($MarkupTypeParts)
    {
        $this->MarkupTypeParts = $MarkupTypeParts;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupValueParts()
    {
        return $this->MarkupValueParts;
    }

    /**
     * @param float $MarkupValueParts
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupValueParts($MarkupValueParts)
    {
        $this->MarkupValueParts = $MarkupValueParts;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupTypeLabor()
    {
        return $this->MarkupTypeLabor;
    }

    /**
     * @param int $MarkupTypeLabor
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupTypeLabor($MarkupTypeLabor)
    {
        $this->MarkupTypeLabor = $MarkupTypeLabor;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupValueLabor()
    {
        return $this->MarkupValueLabor;
    }

    /**
     * @param float $MarkupValueLabor
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupValueLabor($MarkupValueLabor)
    {
        $this->MarkupValueLabor = $MarkupValueLabor;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkupPartsIsActive()
    {
        return $this->MarkupPartsIsActive;
    }

    /**
     * @param boolean $MarkupPartsIsActive
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupPartsIsActive($MarkupPartsIsActive)
    {
        $this->MarkupPartsIsActive = $MarkupPartsIsActive;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkupLaborIsActive()
    {
        return $this->MarkupLaborIsActive;
    }

    /**
     * @param boolean $MarkupLaborIsActive
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupLaborIsActive($MarkupLaborIsActive)
    {
        $this->MarkupLaborIsActive = $MarkupLaborIsActive;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFiscalDate()
    {
        if ($this->FiscalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FiscalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FiscalDate
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setFiscalDate(\DateTime $FiscalDate)
    {
        $this->FiscalDate = $FiscalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompletedByMtn()
    {
        return $this->IsCompletedByMtn;
    }

    /**
     * @param boolean $IsCompletedByMtn
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setIsCompletedByMtn($IsCompletedByMtn)
    {
        $this->IsCompletedByMtn = $IsCompletedByMtn;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFirstPrintMtn()
    {
        if ($this->DateFirstPrintMtn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateFirstPrintMtn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateFirstPrintMtn
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateFirstPrintMtn(\DateTime $DateFirstPrintMtn)
    {
        $this->DateFirstPrintMtn = $DateFirstPrintMtn->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFirstPrintAcct()
    {
        if ($this->DateFirstPrintAcct == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateFirstPrintAcct);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateFirstPrintAcct
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateFirstPrintAcct(\DateTime $DateFirstPrintAcct)
    {
        $this->DateFirstPrintAcct = $DateFirstPrintAcct->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateLastRePrintMtn()
    {
        if ($this->DateLastRePrintMtn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateLastRePrintMtn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateLastRePrintMtn
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateLastRePrintMtn(\DateTime $DateLastRePrintMtn)
    {
        $this->DateLastRePrintMtn = $DateLastRePrintMtn->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateLastRePrintAcct()
    {
        if ($this->DateLastRePrintAcct == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateLastRePrintAcct);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateLastRePrintAcct
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setDateLastRePrintAcct(\DateTime $DateLastRePrintAcct)
    {
        $this->DateLastRePrintAcct = $DateLastRePrintAcct->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getSubFolio()
    {
        return $this->SubFolio;
    }

    /**
     * @param int $SubFolio
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setSubFolio($SubFolio)
    {
        $this->SubFolio = $SubFolio;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * @param int $AccountType
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAccountType($AccountType)
    {
        $this->AccountType = $AccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechnicalNote()
    {
        return $this->TechnicalNote;
    }

    /**
     * @param string $TechnicalNote
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setTechnicalNote($TechnicalNote)
    {
        $this->TechnicalNote = $TechnicalNote;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountSupplier()
    {
        return $this->AmountSupplier;
    }

    /**
     * @param float $AmountSupplier
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountSupplier($AmountSupplier)
    {
        $this->AmountSupplier = $AmountSupplier;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTaxSupplier()
    {
        return $this->AmountTaxSupplier;
    }

    /**
     * @param float $AmountTaxSupplier
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountTaxSupplier($AmountTaxSupplier)
    {
        $this->AmountTaxSupplier = $AmountTaxSupplier;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupTypeSupplier()
    {
        return $this->MarkupTypeSupplier;
    }

    /**
     * @param int $MarkupTypeSupplier
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupTypeSupplier($MarkupTypeSupplier)
    {
        $this->MarkupTypeSupplier = $MarkupTypeSupplier;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupValueSupplier()
    {
        return $this->MarkupValueSupplier;
    }

    /**
     * @param float $MarkupValueSupplier
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupValueSupplier($MarkupValueSupplier)
    {
        $this->MarkupValueSupplier = $MarkupValueSupplier;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkupSupplierIsActive()
    {
        return $this->MarkupSupplierIsActive;
    }

    /**
     * @param boolean $MarkupSupplierIsActive
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupSupplierIsActive($MarkupSupplierIsActive)
    {
        $this->MarkupSupplierIsActive = $MarkupSupplierIsActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedBy()
    {
        return $this->RequestedBy;
    }

    /**
     * @param string $RequestedBy
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setRequestedBy($RequestedBy)
    {
        $this->RequestedBy = $RequestedBy;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountTaxGlobal()
    {
        return $this->AmountTaxGlobal;
    }

    /**
     * @param float $AmountTaxGlobal
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAmountTaxGlobal($AmountTaxGlobal)
    {
        $this->AmountTaxGlobal = $AmountTaxGlobal;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostingTaxType()
    {
        return $this->PostingTaxType;
    }

    /**
     * @param int $PostingTaxType
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setPostingTaxType($PostingTaxType)
    {
        $this->PostingTaxType = $PostingTaxType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostingType()
    {
        return $this->PostingType;
    }

    /**
     * @param int $PostingType
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setPostingType($PostingType)
    {
        $this->PostingType = $PostingType;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupModeParts()
    {
        return $this->MarkupModeParts;
    }

    /**
     * @param int $MarkupModeParts
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupModeParts($MarkupModeParts)
    {
        $this->MarkupModeParts = $MarkupModeParts;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupModeLabor()
    {
        return $this->MarkupModeLabor;
    }

    /**
     * @param int $MarkupModeLabor
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupModeLabor($MarkupModeLabor)
    {
        $this->MarkupModeLabor = $MarkupModeLabor;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarkupModeSupplier()
    {
        return $this->MarkupModeSupplier;
    }

    /**
     * @param int $MarkupModeSupplier
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setMarkupModeSupplier($MarkupModeSupplier)
    {
        $this->MarkupModeSupplier = $MarkupModeSupplier;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeTo()
    {
        return $this->ChargeTo;
    }

    /**
     * @param string $ChargeTo
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setChargeTo($ChargeTo)
    {
        $this->ChargeTo = $ChargeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param string $AccountStatus
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAnnualMaintenance()
    {
        return $this->IsAnnualMaintenance;
    }

    /**
     * @param boolean $IsAnnualMaintenance
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setIsAnnualMaintenance($IsAnnualMaintenance)
    {
        $this->IsAnnualMaintenance = $IsAnnualMaintenance;
        return $this;
    }

    /**
     * @return ContractWOBillDetail
     */
    public function getContractWOBillDetail()
    {
        return $this->ContractWOBillDetail;
    }

    /**
     * @param ContractWOBillDetail $ContractWOBillDetail
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setContractWOBillDetail($ContractWOBillDetail)
    {
        $this->ContractWOBillDetail = $ContractWOBillDetail;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerContracts_Id()
    {
        return $this->OwnerContracts_Id;
    }

    /**
     * @param int $OwnerContracts_Id
     * @return \Gueststream\PMS\IQWare\API\ContractWO
     */
    public function setOwnerContracts_Id($OwnerContracts_Id)
    {
        $this->OwnerContracts_Id = $OwnerContracts_Id;
        return $this;
    }
}

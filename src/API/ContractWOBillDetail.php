<?php

namespace Gueststream\PMS\IQWare\API;

class ContractWOBillDetail
{

    /**
     * @var int $ID_WOBillDetail
     */
    protected $ID_WOBillDetail = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $SeqNo
     */
    protected $SeqNo = null;

    /**
     * @var int $WOType
     */
    protected $WOType = null;

    /**
     * @var string $WOItemDescription
     */
    protected $WOItemDescription = null;

    /**
     * @var float $WOQuantity
     */
    protected $WOQuantity = null;

    /**
     * @var float $WOUnit
     */
    protected $WOUnit = null;

    /**
     * @var string $ServiceName
     */
    protected $ServiceName = null;

    /**
     * @var string $ContractorName
     */
    protected $ContractorName = null;

    /**
     * @var float $CostService
     */
    protected $CostService = null;

    /**
     * @var float $Markup
     */
    protected $Markup = null;

    /**
     * @var int $WorkOrderNo
     */
    protected $WorkOrderNo = null;

    /**
     * @var int $ContractWO_Id
     */
    protected $ContractWO_Id = null;

    /**
     * @var int $ContractWO_Id_0
     */
    protected $ContractWO_Id_0 = null;

    /**
     * @param int $ID_WOBillDetail
     * @param int $ID_Room
     * @param int $SeqNo
     * @param int $WOType
     * @param string $WOItemDescription
     * @param float $WOQuantity
     * @param float $WOUnit
     * @param string $ServiceName
     * @param string $ContractorName
     * @param float $CostService
     * @param float $Markup
     * @param int $WorkOrderNo
     * @param int $ContractWO_Id
     * @param int $ContractWO_Id_0
     */
    public function __construct($ID_WOBillDetail, $ID_Room, $SeqNo, $WOType, $WOItemDescription, $WOQuantity, $WOUnit, $ServiceName, $ContractorName, $CostService, $Markup, $WorkOrderNo, $ContractWO_Id, $ContractWO_Id_0)
    {
        $this->ID_WOBillDetail = $ID_WOBillDetail;
        $this->ID_Room = $ID_Room;
        $this->SeqNo = $SeqNo;
        $this->WOType = $WOType;
        $this->WOItemDescription = $WOItemDescription;
        $this->WOQuantity = $WOQuantity;
        $this->WOUnit = $WOUnit;
        $this->ServiceName = $ServiceName;
        $this->ContractorName = $ContractorName;
        $this->CostService = $CostService;
        $this->Markup = $Markup;
        $this->WorkOrderNo = $WorkOrderNo;
        $this->ContractWO_Id = $ContractWO_Id;
        $this->ContractWO_Id_0 = $ContractWO_Id_0;
    }

    /**
     * @return int
     */
    public function getID_WOBillDetail()
    {
        return $this->ID_WOBillDetail;
    }

    /**
     * @param int $ID_WOBillDetail
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setID_WOBillDetail($ID_WOBillDetail)
    {
        $this->ID_WOBillDetail = $ID_WOBillDetail;
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
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setSeqNo($SeqNo)
    {
        $this->SeqNo = $SeqNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getWOType()
    {
        return $this->WOType;
    }

    /**
     * @param int $WOType
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setWOType($WOType)
    {
        $this->WOType = $WOType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWOItemDescription()
    {
        return $this->WOItemDescription;
    }

    /**
     * @param string $WOItemDescription
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setWOItemDescription($WOItemDescription)
    {
        $this->WOItemDescription = $WOItemDescription;
        return $this;
    }

    /**
     * @return float
     */
    public function getWOQuantity()
    {
        return $this->WOQuantity;
    }

    /**
     * @param float $WOQuantity
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setWOQuantity($WOQuantity)
    {
        $this->WOQuantity = $WOQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getWOUnit()
    {
        return $this->WOUnit;
    }

    /**
     * @param float $WOUnit
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setWOUnit($WOUnit)
    {
        $this->WOUnit = $WOUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractorName()
    {
        return $this->ContractorName;
    }

    /**
     * @param string $ContractorName
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setContractorName($ContractorName)
    {
        $this->ContractorName = $ContractorName;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostService()
    {
        return $this->CostService;
    }

    /**
     * @param float $CostService
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setCostService($CostService)
    {
        $this->CostService = $CostService;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkup()
    {
        return $this->Markup;
    }

    /**
     * @param float $Markup
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setMarkup($Markup)
    {
        $this->Markup = $Markup;
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
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setWorkOrderNo($WorkOrderNo)
    {
        $this->WorkOrderNo = $WorkOrderNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getContractWO_Id()
    {
        return $this->ContractWO_Id;
    }

    /**
     * @param int $ContractWO_Id
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setContractWO_Id($ContractWO_Id)
    {
        $this->ContractWO_Id = $ContractWO_Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getContractWO_Id_0()
    {
        return $this->ContractWO_Id_0;
    }

    /**
     * @param int $ContractWO_Id_0
     * @return \Gueststream\PMS\IQWare\API\ContractWOBillDetail
     */
    public function setContractWO_Id_0($ContractWO_Id_0)
    {
        $this->ContractWO_Id_0 = $ContractWO_Id_0;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerInvoiceInfo
{

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var int $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @var string $HTTPMimeType
     */
    protected $HTTPMimeType = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @param \DateTime $InvoiceDate
     * @param int $DocumentID
     */
    public function __construct(\DateTime $InvoiceDate, $DocumentID)
    {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
        $this->DocumentID = $DocumentID;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        if ($this->InvoiceDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->InvoiceDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceInfo
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentID()
    {
        return $this->DocumentID;
    }

    /**
     * @param int $DocumentID
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceInfo
     */
    public function setDocumentID($DocumentID)
    {
        $this->DocumentID = $DocumentID;
        return $this;
    }

    /**
     * @return string
     */
    public function getHTTPMimeType()
    {
        return $this->HTTPMimeType;
    }

    /**
     * @param string $HTTPMimeType
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceInfo
     */
    public function setHTTPMimeType($HTTPMimeType)
    {
        $this->HTTPMimeType = $HTTPMimeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceInfo
     */
    public function setSupplierName($SupplierName)
    {
        $this->SupplierName = $SupplierName;
        return $this;
    }
}

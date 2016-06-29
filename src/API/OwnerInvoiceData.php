<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerInvoiceData
{

    /**
     * @var int $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @var string $HTTPMimeType
     */
    protected $HTTPMimeType = null;

    /**
     * @var base64Binary $pdfStream
     */
    protected $pdfStream = null;

    /**
     * @param int $DocumentID
     */
    public function __construct($DocumentID)
    {
        $this->DocumentID = $DocumentID;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceData
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
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceData
     */
    public function setHTTPMimeType($HTTPMimeType)
    {
        $this->HTTPMimeType = $HTTPMimeType;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPdfStream()
    {
        return $this->pdfStream;
    }

    /**
     * @param base64Binary $pdfStream
     * @return \Gueststream\PMS\IQWare\API\OwnerInvoiceData
     */
    public function setPdfStream($pdfStream)
    {
        $this->pdfStream = $pdfStream;
        return $this;
    }
}

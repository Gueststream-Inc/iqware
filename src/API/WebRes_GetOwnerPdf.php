<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerPdf
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var OwnerPdfDocumentType $pdfType
     */
    protected $pdfType = null;

    /**
     * @var \DateTime $endOfMonth
     */
    protected $endOfMonth = null;

    /**
     * @param int $guid
     * @param int $ID_CondoOwner
     * @param OwnerPdfDocumentType $pdfType
     * @param \DateTime $endOfMonth
     */
    public function __construct($guid, $ID_CondoOwner, $pdfType, \DateTime $endOfMonth)
    {
        $this->guid = $guid;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->pdfType = $pdfType;
        $this->endOfMonth = $endOfMonth->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerPdf
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerPdf
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return OwnerPdfDocumentType
     */
    public function getPdfType()
    {
        return $this->pdfType;
    }

    /**
     * @param OwnerPdfDocumentType $pdfType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerPdf
     */
    public function setPdfType($pdfType)
    {
        $this->pdfType = $pdfType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndOfMonth()
    {
        if ($this->endOfMonth == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->endOfMonth);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endOfMonth
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerPdf
     */
    public function setEndOfMonth(\DateTime $endOfMonth)
    {
        $this->endOfMonth = $endOfMonth->format(\DateTime::ATOM);
        return $this;
    }
}

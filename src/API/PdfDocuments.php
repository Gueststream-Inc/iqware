<?php

namespace Gueststream\PMS\IQWare\API;

class PdfDocuments
{

    /**
     * @var boolean $StatementGenerated
     */
    protected $StatementGenerated = null;

    /**
     * @var boolean $ActivityGenerated
     */
    protected $ActivityGenerated = null;

    /**
     * @param boolean $StatementGenerated
     * @param boolean $ActivityGenerated
     */
    public function __construct($StatementGenerated, $ActivityGenerated)
    {
        $this->StatementGenerated = $StatementGenerated;
        $this->ActivityGenerated = $ActivityGenerated;
    }

    /**
     * @return boolean
     */
    public function getStatementGenerated()
    {
        return $this->StatementGenerated;
    }

    /**
     * @param boolean $StatementGenerated
     * @return \Gueststream\PMS\IQWare\API\PdfDocuments
     */
    public function setStatementGenerated($StatementGenerated)
    {
        $this->StatementGenerated = $StatementGenerated;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActivityGenerated()
    {
        return $this->ActivityGenerated;
    }

    /**
     * @param boolean $ActivityGenerated
     * @return \Gueststream\PMS\IQWare\API\PdfDocuments
     */
    public function setActivityGenerated($ActivityGenerated)
    {
        $this->ActivityGenerated = $ActivityGenerated;
        return $this;
    }
}

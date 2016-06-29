<?php

namespace Gueststream\PMS\IQWare\API;

class BreakdownByDay
{

    /**
     * @var \DateTime $BreakdownDate
     */
    protected $BreakdownDate = null;

    /**
     * @var ArrayOfSummaryItem $BreakdownItems
     */
    protected $BreakdownItems = null;

    /**
     * @var SummaryItem $BreakdownItemRoomCharge
     */
    protected $BreakdownItemRoomCharge = null;

    /**
     * @var ArrayOfMarkupItem $Markup
     */
    protected $Markup = null;

    /**
     * @var ArrayOfApplicableSpecialOffersRBO $ListApplicableSpecialOffersRBO
     */
    protected $ListApplicableSpecialOffersRBO = null;

    /**
     * @param \DateTime $BreakdownDate
     */
    public function __construct(\DateTime $BreakdownDate)
    {
        $this->BreakdownDate = $BreakdownDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getBreakdownDate()
    {
        if ($this->BreakdownDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BreakdownDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BreakdownDate
     * @return \Gueststream\PMS\IQWare\API\BreakdownByDay
     */
    public function setBreakdownDate(\DateTime $BreakdownDate)
    {
        $this->BreakdownDate = $BreakdownDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfSummaryItem
     */
    public function getBreakdownItems()
    {
        return $this->BreakdownItems;
    }

    /**
     * @param ArrayOfSummaryItem $BreakdownItems
     * @return \Gueststream\PMS\IQWare\API\BreakdownByDay
     */
    public function setBreakdownItems($BreakdownItems)
    {
        $this->BreakdownItems = $BreakdownItems;
        return $this;
    }

    /**
     * @return SummaryItem
     */
    public function getBreakdownItemRoomCharge()
    {
        return $this->BreakdownItemRoomCharge;
    }

    /**
     * @param SummaryItem $BreakdownItemRoomCharge
     * @return \Gueststream\PMS\IQWare\API\BreakdownByDay
     */
    public function setBreakdownItemRoomCharge($BreakdownItemRoomCharge)
    {
        $this->BreakdownItemRoomCharge = $BreakdownItemRoomCharge;
        return $this;
    }

    /**
     * @return ArrayOfMarkupItem
     */
    public function getMarkup()
    {
        return $this->Markup;
    }

    /**
     * @param ArrayOfMarkupItem $Markup
     * @return \Gueststream\PMS\IQWare\API\BreakdownByDay
     */
    public function setMarkup($Markup)
    {
        $this->Markup = $Markup;
        return $this;
    }

    /**
     * @return ArrayOfApplicableSpecialOffersRBO
     */
    public function getListApplicableSpecialOffersRBO()
    {
        return $this->ListApplicableSpecialOffersRBO;
    }

    /**
     * @param ArrayOfApplicableSpecialOffersRBO $ListApplicableSpecialOffersRBO
     * @return \Gueststream\PMS\IQWare\API\BreakdownByDay
     */
    public function setListApplicableSpecialOffersRBO($ListApplicableSpecialOffersRBO)
    {
        $this->ListApplicableSpecialOffersRBO = $ListApplicableSpecialOffersRBO;
        return $this;
    }
}

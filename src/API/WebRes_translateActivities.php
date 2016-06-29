<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_translateActivities
{

    /**
     * @var string $strActivitiesXML
     */
    protected $strActivitiesXML = null;

    /**
     * @param string $strActivitiesXML
     */
    public function __construct($strActivitiesXML)
    {
        $this->strActivitiesXML = $strActivitiesXML;
    }

    /**
     * @return string
     */
    public function getStrActivitiesXML()
    {
        return $this->strActivitiesXML;
    }

    /**
     * @param string $strActivitiesXML
     * @return \Gueststream\PMS\IQWare\API\WebRes_translateActivities
     */
    public function setStrActivitiesXML($strActivitiesXML)
    {
        $this->strActivitiesXML = $strActivitiesXML;
        return $this;
    }
}

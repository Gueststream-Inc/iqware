<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getActivityStructureString
{

    /**
     * @var dsActivities $dsActivities
     */
    protected $dsActivities = null;

    /**
     * @param dsActivities $dsActivities
     */
    public function __construct($dsActivities)
    {
        $this->dsActivities = $dsActivities;
    }

    /**
     * @return dsActivities
     */
    public function getDsActivities()
    {
        return $this->dsActivities;
    }

    /**
     * @param dsActivities $dsActivities
     * @return \Gueststream\PMS\IQWare\API\WebRes_getActivityStructureString
     */
    public function setDsActivities($dsActivities)
    {
        $this->dsActivities = $dsActivities;
        return $this;
    }
}

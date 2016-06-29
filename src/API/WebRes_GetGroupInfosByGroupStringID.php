<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupInfosByGroupStringID
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $GrpID
     */
    protected $GrpID = null;

    /**
     * @param int $guid
     * @param string $GrpID
     */
    public function __construct($guid, $GrpID)
    {
        $this->guid = $guid;
        $this->GrpID = $GrpID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfosByGroupStringID
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrpID()
    {
        return $this->GrpID;
    }

    /**
     * @param string $GrpID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfosByGroupStringID
     */
    public function setGrpID($GrpID)
    {
        $this->GrpID = $GrpID;
        return $this;
    }
}

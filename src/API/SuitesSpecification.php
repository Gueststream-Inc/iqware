<?php

namespace Gueststream\PMS\IQWare\API;

class SuitesSpecification
{

    /**
     * @var int $ID_SuiteConfiguration
     */
    protected $ID_SuiteConfiguration = null;

    /**
     * @var int $Suite_ID_AccomodationType
     */
    protected $Suite_ID_AccomodationType = null;

    /**
     * @var int $ID_RoomTypeSuite
     */
    protected $ID_RoomTypeSuite = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var string $SuiteName
     */
    protected $SuiteName = null;

    /**
     * @var boolean $IsInactive
     */
    protected $IsInactive = null;

    /**
     * @var ArrayOfLanguage $SuiteDescription
     */
    protected $SuiteDescription = null;

    /**
     * @var ArrayOfSuiteItems $SuiteComposition
     */
    protected $SuiteComposition = null;

    /**
     * @param int $ID_SuiteConfiguration
     * @param int $Suite_ID_AccomodationType
     * @param int $ID_RoomTypeSuite
     * @param int $ID_Bedding
     * @param boolean $IsInactive
     */
    public function __construct($ID_SuiteConfiguration, $Suite_ID_AccomodationType, $ID_RoomTypeSuite, $ID_Bedding, $IsInactive)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        $this->Suite_ID_AccomodationType = $Suite_ID_AccomodationType;
        $this->ID_RoomTypeSuite = $ID_RoomTypeSuite;
        $this->ID_Bedding = $ID_Bedding;
        $this->IsInactive = $IsInactive;
    }

    /**
     * @return int
     */
    public function getID_SuiteConfiguration()
    {
        return $this->ID_SuiteConfiguration;
    }

    /**
     * @param int $ID_SuiteConfiguration
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setID_SuiteConfiguration($ID_SuiteConfiguration)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuite_ID_AccomodationType()
    {
        return $this->Suite_ID_AccomodationType;
    }

    /**
     * @param int $Suite_ID_AccomodationType
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setSuite_ID_AccomodationType($Suite_ID_AccomodationType)
    {
        $this->Suite_ID_AccomodationType = $Suite_ID_AccomodationType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomTypeSuite()
    {
        return $this->ID_RoomTypeSuite;
    }

    /**
     * @param int $ID_RoomTypeSuite
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setID_RoomTypeSuite($ID_RoomTypeSuite)
    {
        $this->ID_RoomTypeSuite = $ID_RoomTypeSuite;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Bedding()
    {
        return $this->ID_Bedding;
    }

    /**
     * @param int $ID_Bedding
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuiteName()
    {
        return $this->SuiteName;
    }

    /**
     * @param string $SuiteName
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setSuiteName($SuiteName)
    {
        $this->SuiteName = $SuiteName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
        return $this->IsInactive;
    }

    /**
     * @param boolean $IsInactive
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setIsInactive($IsInactive)
    {
        $this->IsInactive = $IsInactive;
        return $this;
    }

    /**
     * @return ArrayOfLanguage
     */
    public function getSuiteDescription()
    {
        return $this->SuiteDescription;
    }

    /**
     * @param ArrayOfLanguage $SuiteDescription
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setSuiteDescription($SuiteDescription)
    {
        $this->SuiteDescription = $SuiteDescription;
        return $this;
    }

    /**
     * @return ArrayOfSuiteItems
     */
    public function getSuiteComposition()
    {
        return $this->SuiteComposition;
    }

    /**
     * @param ArrayOfSuiteItems $SuiteComposition
     * @return \Gueststream\PMS\IQWare\API\SuitesSpecification
     */
    public function setSuiteComposition($SuiteComposition)
    {
        $this->SuiteComposition = $SuiteComposition;
        return $this;
    }
}

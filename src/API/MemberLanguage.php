<?php

namespace Gueststream\PMS\IQWare\API;

class MemberLanguage
{

    /**
     * @var int $ID_Language
     */
    protected $ID_Language = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID_Language
     */
    public function __construct($ID_Language)
    {
        $this->ID_Language = $ID_Language;
    }

    /**
     * @return int
     */
    public function getID_Language()
    {
        return $this->ID_Language;
    }

    /**
     * @param int $ID_Language
     * @return \Gueststream\PMS\IQWare\API\MemberLanguage
     */
    public function setID_Language($ID_Language)
    {
        $this->ID_Language = $ID_Language;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Gueststream\PMS\IQWare\API\MemberLanguage
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}

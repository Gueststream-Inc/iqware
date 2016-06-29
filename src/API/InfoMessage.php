<?php

namespace Gueststream\PMS\IQWare\API;

class InfoMessage
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Gueststream\PMS\IQWare\API\InfoMessage
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}

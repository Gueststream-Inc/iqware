<?php

namespace Gueststream\PMS\IQWare\API;

class GetLanguageIDsResponse
{

    /**
     * @var ArrayOfMemberLanguage $GetLanguageIDsResult
     */
    protected $GetLanguageIDsResult = null;

    /**
     * @param ArrayOfMemberLanguage $GetLanguageIDsResult
     */
    public function __construct($GetLanguageIDsResult)
    {
        $this->GetLanguageIDsResult = $GetLanguageIDsResult;
    }

    /**
     * @return ArrayOfMemberLanguage
     */
    public function getGetLanguageIDsResult()
    {
        return $this->GetLanguageIDsResult;
    }

    /**
     * @param ArrayOfMemberLanguage $GetLanguageIDsResult
     * @return \Gueststream\PMS\IQWare\API\GetLanguageIDsResponse
     */
    public function setGetLanguageIDsResult($GetLanguageIDsResult)
    {
        $this->GetLanguageIDsResult = $GetLanguageIDsResult;
        return $this;
    }
}

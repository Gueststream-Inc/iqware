<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitStatementsResponse
{

    /**
     * @var GeneratedStatementsList $GetUnitStatementsResult
     */
    protected $GetUnitStatementsResult = null;

    /**
     * @param GeneratedStatementsList $GetUnitStatementsResult
     */
    public function __construct($GetUnitStatementsResult)
    {
        $this->GetUnitStatementsResult = $GetUnitStatementsResult;
    }

    /**
     * @return GeneratedStatementsList
     */
    public function getGetUnitStatementsResult()
    {
        return $this->GetUnitStatementsResult;
    }

    /**
     * @param GeneratedStatementsList $GetUnitStatementsResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitStatementsResponse
     */
    public function setGetUnitStatementsResult($GetUnitStatementsResult)
    {
        $this->GetUnitStatementsResult = $GetUnitStatementsResult;
        return $this;
    }
}

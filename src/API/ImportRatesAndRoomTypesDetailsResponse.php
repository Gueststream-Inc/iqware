<?php

namespace Gueststream\PMS\IQWare\API;

class ImportRatesAndRoomTypesDetailsResponse
{

    /**
     * @var ArrayOfExportedRate $ImportRatesAndRoomTypesDetailsResult
     */
    protected $ImportRatesAndRoomTypesDetailsResult = null;

    /**
     * @param ArrayOfExportedRate $ImportRatesAndRoomTypesDetailsResult
     */
    public function __construct($ImportRatesAndRoomTypesDetailsResult)
    {
        $this->ImportRatesAndRoomTypesDetailsResult = $ImportRatesAndRoomTypesDetailsResult;
    }

    /**
     * @return ArrayOfExportedRate
     */
    public function getImportRatesAndRoomTypesDetailsResult()
    {
        return $this->ImportRatesAndRoomTypesDetailsResult;
    }

    /**
     * @param ArrayOfExportedRate $ImportRatesAndRoomTypesDetailsResult
     * @return \Gueststream\PMS\IQWare\API\ImportRatesAndRoomTypesDetailsResponse
     */
    public function setImportRatesAndRoomTypesDetailsResult($ImportRatesAndRoomTypesDetailsResult)
    {
        $this->ImportRatesAndRoomTypesDetailsResult = $ImportRatesAndRoomTypesDetailsResult;
        return $this;
    }
}

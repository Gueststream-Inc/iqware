<?php

namespace Gueststream\PMS\IQWare\API;

class GetIQImagesFilesResponse
{

    /**
     * @var ArrayOfIQImage $GetIQImagesFilesResult
     */
    protected $GetIQImagesFilesResult = null;

    /**
     * @param ArrayOfIQImage $GetIQImagesFilesResult
     */
    public function __construct($GetIQImagesFilesResult)
    {
        $this->GetIQImagesFilesResult = $GetIQImagesFilesResult;
    }

    /**
     * @return ArrayOfIQImage
     */
    public function getGetIQImagesFilesResult()
    {
        return $this->GetIQImagesFilesResult;
    }

    /**
     * @param ArrayOfIQImage $GetIQImagesFilesResult
     * @return \Gueststream\PMS\IQWare\API\GetIQImagesFilesResponse
     */
    public function setGetIQImagesFilesResult($GetIQImagesFilesResult)
    {
        $this->GetIQImagesFilesResult = $GetIQImagesFilesResult;
        return $this;
    }
}

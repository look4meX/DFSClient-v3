<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Amazon;


use DFSClientV3\Models\AbstractModel;

class AmazonProductRankOverviewLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/amazon/product_rank_overview/live';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AmazonProductRankOverviewLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AmazonProductRankOverviewLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $asins
     * @return $this
     */
    public function setAsins(array $asins)
    {
        $this->payload['asins'] = $asins;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}

<?php


namespace DFSClientV3\Models\KeywordsDataApi\DataForSeo_Trends;


use DFSClientV3\Models\AbstractModel;

class DataforseoTrendsMergedDataLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/dataforseo_trends/merged_data/live';
    protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\DataforseoTrendsMergedDataLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\DataforseoTrendsMergedDataLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keywords
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

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
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->payload['type'] = $type;

        return $this;
    }

    /**
     * @param string $dateFrom
     * @return $this
     */
    public function setDateFrom(string $dateFrom)
    {
        $this->payload['date_from'] = $dateFrom;

        return $this;
    }

    /**
     * @param string $dateTo
     * @return $this
     */
    public function setDateTo(string $dateTo)
    {
        $this->payload['date_to'] = $dateTo;

        return $this;
    }

	/**
	 * @param string $timeRange
	 * @return $this
	 */
	public function setTimeRange(string $timeRange)
	{
		$this->payload['time_range'] = $timeRange;

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

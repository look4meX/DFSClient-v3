<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Models\AbstractModel;

class GoogleKeywordsForCategoriesLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/google/keywords_for_categories/live';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $categoryCodes
     * @return $this
     */
    public function setCategoryCodes(array $categoryCodes)
    {
        $this->payload['category_codes'] = $categoryCodes;

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
	 * @param bool $categoryIntersection
	 * @return $this
	 */
	public function setCategoryIntersection(bool $categoryIntersection)
	{
		$this->payload['category_intersection'] = $categoryIntersection;

		return $this;
	}

	/**
	 * @param bool $includeSerpInfo
	 * @return $this
	 */
	public function setIncludeSerpInfo(bool $includeSerpInfo)
	{
		$this->payload['include_serp_info'] = $includeSerpInfo;

		return $this;
	}

    /**
     * @param array $filters
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

        return $this;
    }

    /**
     * @param array $orderBy
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->payload['limit'] = $limit;

        return $this;
    }

	/**
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset(int $offset)
	{
		$this->payload['offset'] = $offset;

		return $this;
	}

	/**
	 * @param string $offsetToken
	 * @return $this
	 */
	public function setOffsetToken(string $offsetToken)
	{
		$this->payload['offset_token'] = $offsetToken;

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

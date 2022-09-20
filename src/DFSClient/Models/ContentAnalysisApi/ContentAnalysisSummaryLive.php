<?php


namespace DFSClientV3\Models\ContentAnalysisApi;

use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentAnalysisSummaryLive extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'content_analysis/summary/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @param string $keyword
	 * @return $this
	 */
	public function setKeyword(string $keyword) {
		$this->payload['keyword'] = $keyword;
		return $this;
	}

	/**
	 * @param array $keywordFields
	 * @return $this
	 */
	public function setKeywordFields(array $keywordFields) {
		$this->payload['keyword_fields'] = $keywordFields;
		return $this;
	}

	/**
	 * @param array $pageType
	 * @return $this
	 */
	public function setPageType(array $pageType) {
		$this->payload['page_type'] = $pageType;
		return $this;
	}

	/**
	 * @param string $searchMode
	 * @return $this
	 */
	public function setSearchMode(string $searchMode) {
		$this->payload['search_mode'] = $searchMode;
		return $this;
	}

	/**
	 * @param int $internalListLimit
	 * @return $this
	 */
	public function setInternalListLimit(int $internalListLimit) {
		$this->payload['internal_list_limit'] = $internalListLimit;
		return $this;
	}

	/**
	 * @param array $initialDatasetFilters
	 * @return $this
	 */
	public function setInitialDatasetFilters(array $initialDatasetFilters) {
		$this->payload['initial_dataset_filters'] = $initialDatasetFilters;
		return $this;
	}

	/**
	 * @param float $positiveConnotationThreshold
	 * @return $this
	 */
	public function setPositiveConnotationThreshold(float $positiveConnotationThreshold) {
		$this->payload['positive_connotation_threshold'] = $positiveConnotationThreshold;
		return $this;
	}

	/**
	 * @param float $sentimentsConnotationThreshold
	 * @return $this
	 */
	public function setSentimentsConnotationThreshold(float $sentimentsConnotationThreshold) {
		$this->payload['sentiments_connotation_threshold'] = $sentimentsConnotationThreshold;
		return $this;
	}

	/**
	 * @return ContentAnalysisSummaryLiveEntityMain
	 */
	public function get(): ContentAnalysisSummaryLiveEntityMain	{
		return parent::get(); // TODO: Change the autogenerated stub
	}
}

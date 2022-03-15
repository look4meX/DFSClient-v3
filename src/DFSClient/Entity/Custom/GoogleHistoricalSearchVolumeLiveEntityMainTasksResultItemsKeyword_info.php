<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches;

class GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_info 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|integer $competition;
    */
    public $competition = null;

    /**
    * @var null|double $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * @var array|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}
<?php

namespace DFSClientV3\Entity\Custom;


class GoogleSearchIntentLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|GoogleSearchIntentLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}
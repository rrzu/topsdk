<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvQueryCpvQueryParam {

    /**
        属性值id
     **/
    public $value_id;

    /**
        属性id
     **/
    public $property_id;

    /**
        类目id
     **/
    public $channel_cat_id;

    /**
        分页页码,从1开始，如果要查询类目某个属性的属性值，支持分页查询
     **/
    public $page_num;

    /**
        分页大小，最大支持200，如果要查询类目某个属性的属性值，支持分页查询
     **/
    public $page_size;


    public function getValueId() : string{
        return $this->value_id;
    }

    public function setValueId(string $valueId){
        $this->value_id = $valueId;
    }

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}


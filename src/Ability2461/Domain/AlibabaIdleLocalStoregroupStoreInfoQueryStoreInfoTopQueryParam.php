<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopQueryParam {

    /**
        门店库Id
     **/
    public $store_group_id;

    /**
        页码
     **/
    public $page_size;

    /**
        每页行数
     **/
    public $page_num;

    /**
        城市
     **/
    public $city_name;

    /**
        区/县
     **/
    public $area_name;


    public function getStoreGroupId() : int{
        return $this->store_group_id;
    }

    public function setStoreGroupId(int $storeGroupId){
        $this->store_group_id = $storeGroupId;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }

    public function getCityName() : string{
        return $this->city_name;
    }

    public function setCityName(string $cityName){
        $this->city_name = $cityName;
    }

    public function getAreaName() : string{
        return $this->area_name;
    }

    public function setAreaName(string $areaName){
        $this->area_name = $areaName;
    }


}


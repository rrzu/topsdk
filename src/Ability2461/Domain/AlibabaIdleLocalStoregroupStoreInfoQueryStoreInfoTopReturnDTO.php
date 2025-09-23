<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopReturnDTO {

    /**
        市
     **/
    public $city_name;

    /**
        区/县
     **/
    public $area_name;

    /**
        门店名
     **/
    public $store_name;

    /**
        省
     **/
    public $province_name;

    /**
        id
     **/
    public $store_id;

    /**
        门店地址
     **/
    public $address;

    /**
        区/县 Id
     **/
    public $area_id;


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

    public function getStoreName() : string{
        return $this->store_name;
    }

    public function setStoreName(string $storeName){
        $this->store_name = $storeName;
    }

    public function getProvinceName() : string{
        return $this->province_name;
    }

    public function setProvinceName(string $provinceName){
        $this->province_name = $provinceName;
    }

    public function getStoreId() : int{
        return $this->store_id;
    }

    public function setStoreId(int $storeId){
        $this->store_id = $storeId;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getAreaId() : int{
        return $this->area_id;
    }

    public function setAreaId(int $areaId){
        $this->area_id = $areaId;
    }


}


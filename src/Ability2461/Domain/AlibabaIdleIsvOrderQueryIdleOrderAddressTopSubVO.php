<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO {

    /**
        详细地址
     **/
    public $address;

    /**
        行政区
     **/
    public $area;

    /**
        城市
     **/
    public $city;

    /**
        收件人姓名
     **/
    public $name;

    /**
        电话号码
     **/
    public $phone;

    /**
        省份
     **/
    public $prov;

    /**
        城镇/街道
     **/
    public $town;


    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPhone() : string{
        return $this->phone;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function getProv() : string{
        return $this->prov;
    }

    public function setProv(string $prov){
        $this->prov = $prov;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }


}


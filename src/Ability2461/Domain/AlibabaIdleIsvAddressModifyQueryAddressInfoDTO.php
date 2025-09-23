<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvAddressModifyQueryAddressInfoDTO {

    /**
        名字
     **/
    public $name;

    /**
        手机号
     **/
    public $phone_number;

    /**
        浙江省杭州市余杭区余杭街道1号1幢5单元703
     **/
    public $address;

    /**
        浙江省
     **/
    public $prov;

    /**
        杭州市
     **/
    public $city;

    /**
        余杭区
     **/
    public $area;

    /**
        余杭街道
     **/
    public $town;

    /**
        余杭街道1号1幢5单元703
     **/
    public $raw_address;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPhoneNumber() : string{
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phone_number = $phoneNumber;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getProv() : string{
        return $this->prov;
    }

    public function setProv(string $prov){
        $this->prov = $prov;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }

    public function getRawAddress() : string{
        return $this->raw_address;
    }

    public function setRawAddress(string $rawAddress){
        $this->raw_address = $rawAddress;
    }


}


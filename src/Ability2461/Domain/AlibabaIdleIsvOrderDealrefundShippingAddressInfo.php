<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderDealrefundShippingAddressInfo {

    /**
        这里必须写全详细地址
     **/
    public $address_detail;

    /**
        区
     **/
    public $area;

    /**
        市
     **/
    public $city;

    /**
        收件人姓名
     **/
    public $consignee_name;

    /**
        手机号码
     **/
    public $mobile_phone;

    /**
        邮编
     **/
    public $post_code;

    /**
        省
     **/
    public $province;

    /**
        固话
     **/
    public $tel_no;

    /**
        四级地址 镇/街道
     **/
    public $town;

    /**
        区域id
     **/
    public $division_code;


    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
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

    public function getConsigneeName() : string{
        return $this->consignee_name;
    }

    public function setConsigneeName(string $consigneeName){
        $this->consignee_name = $consigneeName;
    }

    public function getMobilePhone() : string{
        return $this->mobile_phone;
    }

    public function setMobilePhone(string $mobilePhone){
        $this->mobile_phone = $mobilePhone;
    }

    public function getPostCode() : string{
        return $this->post_code;
    }

    public function setPostCode(string $postCode){
        $this->post_code = $postCode;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getTelNo() : string{
        return $this->tel_no;
    }

    public function setTelNo(string $telNo){
        $this->tel_no = $telNo;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }

    public function getDivisionCode() : string{
        return $this->division_code;
    }

    public function setDivisionCode(string $divisionCode){
        $this->division_code = $divisionCode;
    }


}


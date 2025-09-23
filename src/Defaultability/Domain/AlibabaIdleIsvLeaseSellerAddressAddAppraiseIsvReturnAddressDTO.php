<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseSellerAddressAddAppraiseIsvReturnAddressDTO {

    /**
        区县id
     **/
    public $area_id;

    /**
        城市名称
     **/
    public $city_name;

    /**
        是否设置为默认地址
     **/
    public $default_addr;

    /**
        区县名称
     **/
    public $district_name;

    /**
        详细地址
     **/
    public $detail_address;

    /**
        手机号
     **/
    public $moblie_phone;

    /**
        省份名称
     **/
    public $province_name;

    /**
        联系人名称
     **/
    public $contact_name;


    public function getAreaId() : int{
        return $this->area_id;
    }

    public function setAreaId(int $areaId){
        $this->area_id = $areaId;
    }

    public function getCityName() : string{
        return $this->city_name;
    }

    public function setCityName(string $cityName){
        $this->city_name = $cityName;
    }

    public function getDefaultAddr() : bool{
        return $this->default_addr;
    }

    public function setDefaultAddr(bool $defaultAddr){
        $this->default_addr = $defaultAddr;
    }

    public function getDistrictName() : string{
        return $this->district_name;
    }

    public function setDistrictName(string $districtName){
        $this->district_name = $districtName;
    }

    public function getDetailAddress() : string{
        return $this->detail_address;
    }

    public function setDetailAddress(string $detailAddress){
        $this->detail_address = $detailAddress;
    }

    public function getMobliePhone() : string{
        return $this->moblie_phone;
    }

    public function setMobliePhone(string $mobliePhone){
        $this->moblie_phone = $mobliePhone;
    }

    public function getProvinceName() : string{
        return $this->province_name;
    }

    public function setProvinceName(string $provinceName){
        $this->province_name = $provinceName;
    }

    public function getContactName() : string{
        return $this->contact_name;
    }

    public function setContactName(string $contactName){
        $this->contact_name = $contactName;
    }


}


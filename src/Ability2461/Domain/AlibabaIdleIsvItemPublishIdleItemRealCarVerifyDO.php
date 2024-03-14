<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemRealCarVerifyDO {

    /**
        行驶证主页 图片id
     **/
    public $driving_license_info;

    /**
        行驶证车辆页 图片id
     **/
    public $driving_license_car_photo;

    /**
        营业执照 图片id
     **/
    public $business_license_front;

    /**
        使用性质 : 营运 / 非营运
     **/
    public $car_function;

    /**
        车辆识别代码 VIN码
     **/
    public $car_vin;


    public function getDrivingLicenseInfo() : string{
        return $this->driving_license_info;
    }

    public function setDrivingLicenseInfo(string $drivingLicenseInfo){
        $this->driving_license_info = $drivingLicenseInfo;
    }

    public function getDrivingLicenseCarPhoto() : string{
        return $this->driving_license_car_photo;
    }

    public function setDrivingLicenseCarPhoto(string $drivingLicenseCarPhoto){
        $this->driving_license_car_photo = $drivingLicenseCarPhoto;
    }

    public function getBusinessLicenseFront() : string{
        return $this->business_license_front;
    }

    public function setBusinessLicenseFront(string $businessLicenseFront){
        $this->business_license_front = $businessLicenseFront;
    }

    public function getCarFunction() : string{
        return $this->car_function;
    }

    public function setCarFunction(string $carFunction){
        $this->car_function = $carFunction;
    }

    public function getCarVin() : string{
        return $this->car_vin;
    }

    public function setCarVin(string $carVin){
        $this->car_vin = $carVin;
    }


}


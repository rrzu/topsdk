<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuBiddingItemPublishYellowBoxItemCreateCmd {

    /**
        cspu信息
     **/
    public $cspu_info;

    /**
        gpuId
     **/
    public $gpu_id;

    /**
        纬度
     **/
    public $latitude;

    /**
        行政区划Id，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(long型，6位)
     **/
    public $division_id;

    /**
        经度
     **/
    public $longitude;


    public function getCspuInfo() : array{
        return $this->cspu_info;
    }

    public function setCspuInfo(array $cspuInfo){
        $this->cspu_info = $cspuInfo;
    }

    public function getGpuId() : int{
        return $this->gpu_id;
    }

    public function setGpuId(int $gpuId){
        $this->gpu_id = $gpuId;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }


}


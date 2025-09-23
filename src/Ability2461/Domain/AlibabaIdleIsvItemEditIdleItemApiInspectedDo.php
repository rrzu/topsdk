<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiInspectedDo {

    /**
        验货报告url链接(长度<=300)
     **/
    public $inspect_report;

    /**
        已验货入仓时间，时间戳，单位秒
     **/
    public $ware_house_time;

    /**
        已验货入仓城市
     **/
    public $ware_house_city;


    public function getInspectReport() : string{
        return $this->inspect_report;
    }

    public function setInspectReport(string $inspectReport){
        $this->inspect_report = $inspectReport;
    }

    public function getWareHouseTime() : int{
        return $this->ware_house_time;
    }

    public function setWareHouseTime(int $wareHouseTime){
        $this->ware_house_time = $wareHouseTime;
    }

    public function getWareHouseCity() : string{
        return $this->ware_house_city;
    }

    public function setWareHouseCity(string $wareHouseCity){
        $this->ware_house_city = $wareHouseCity;
    }


}


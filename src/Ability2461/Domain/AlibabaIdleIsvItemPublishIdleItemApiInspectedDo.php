<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiInspectedDo {

    /**
        验货报告url链接(长度<=300)
     **/
    public $inspect_report;

    /**
        已验货入仓城市，入仓模式必填，不可修改
     **/
    public $ware_house_city;

    /**
        已验货入仓时间，入仓模式必填，时间戳，单位秒，不可修改
     **/
    public $ware_house_time;


    public function getInspectReport() : string{
        return $this->inspect_report;
    }

    public function setInspectReport(string $inspectReport){
        $this->inspect_report = $inspectReport;
    }

    public function getWareHouseCity() : string{
        return $this->ware_house_city;
    }

    public function setWareHouseCity(string $wareHouseCity){
        $this->ware_house_city = $wareHouseCity;
    }

    public function getWareHouseTime() : int{
        return $this->ware_house_time;
    }

    public function setWareHouseTime(int $wareHouseTime){
        $this->ware_house_time = $wareHouseTime;
    }


}


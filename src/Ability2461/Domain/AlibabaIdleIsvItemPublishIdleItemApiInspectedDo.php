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

    /**
        验货报告ID
     **/
    public $inspect_report_id;

    /**
        暗拍价
     **/
    public $secret_auction_price;

    /**
        一口价
     **/
    public $fixed_price;

    /**
        货源类型，RECYCLE（回收）, OTHER（其他，服务商自有）
     **/
    public $source_type;


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

    public function getInspectReportId() : string{
        return $this->inspect_report_id;
    }

    public function setInspectReportId(string $inspectReportId){
        $this->inspect_report_id = $inspectReportId;
    }

    public function getSecretAuctionPrice() : int{
        return $this->secret_auction_price;
    }

    public function setSecretAuctionPrice(int $secretAuctionPrice){
        $this->secret_auction_price = $secretAuctionPrice;
    }

    public function getFixedPrice() : int{
        return $this->fixed_price;
    }

    public function setFixedPrice(int $fixedPrice){
        $this->fixed_price = $fixedPrice;
    }

    public function getSourceType() : string{
        return $this->source_type;
    }

    public function setSourceType(string $sourceType){
        $this->source_type = $sourceType;
    }


}


<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleAutotradeIsvOrderStateProcessAutoTradeAPIParam {

    /**
        场景
     **/
    public $scenario;

    /**
        订单id
     **/
    public $biz_order_id;

    /**
        AT交易产品标识
     **/
    public $x_global_biz_code;

    /**
        额外参数
     **/
    public $extra_param;

    /**
        API版本
     **/
    public $version;


    public function getScenario() : string{
        return $this->scenario;
    }

    public function setScenario(string $scenario){
        $this->scenario = $scenario;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getXGlobalBizCode() : string{
        return $this->x_global_biz_code;
    }

    public function setXGlobalBizCode(string $xGlobalBizCode){
        $this->x_global_biz_code = $xGlobalBizCode;
    }

    public function getExtraParam() : string{
        return $this->extra_param;
    }

    public function setExtraParam(string $extraParam){
        $this->extra_param = $extraParam;
    }

    public function getVersion() : string{
        return $this->version;
    }

    public function setVersion(string $version){
        $this->version = $version;
    }


}


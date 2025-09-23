<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateUpdateTemplateDetailDTO {

    /**
        收货地址id，修改的时候，不能创建或删除默认子模版（division_id为0），不能将默认子模版的division_id修改为其他值
     **/
    public $receive_division_id;

    /**
        运送类型，快递为1
     **/
    public $delivery_type;

    /**
        收货地址名称
     **/
    public $receive_division_name;

    /**
        运费模版id
     **/
    public $template_id;

    /**
        收费类型，默认填写2
     **/
    public $fee_type;

    /**
        收货地址等级，省1市2区3
     **/
    public $receive_level;

    /**
        操作类型，子模版新增add、子模版更新update、子模版删除delete
     **/
    public $operator;

    /**
        首重价格
     **/
    public $first_price;

    /**
        续重价格
     **/
    public $excess_price;

    /**
        首重件数
     **/
    public $excess;

    /**
        子模版ID
     **/
    public $id;

    /**
        首重件数
     **/
    public $first;


    public function getReceiveDivisionId() : int{
        return $this->receive_division_id;
    }

    public function setReceiveDivisionId(int $receiveDivisionId){
        $this->receive_division_id = $receiveDivisionId;
    }

    public function getDeliveryType() : int{
        return $this->delivery_type;
    }

    public function setDeliveryType(int $deliveryType){
        $this->delivery_type = $deliveryType;
    }

    public function getReceiveDivisionName() : string{
        return $this->receive_division_name;
    }

    public function setReceiveDivisionName(string $receiveDivisionName){
        $this->receive_division_name = $receiveDivisionName;
    }

    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getFeeType() : int{
        return $this->fee_type;
    }

    public function setFeeType(int $feeType){
        $this->fee_type = $feeType;
    }

    public function getReceiveLevel() : int{
        return $this->receive_level;
    }

    public function setReceiveLevel(int $receiveLevel){
        $this->receive_level = $receiveLevel;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }

    public function getFirstPrice() : int{
        return $this->first_price;
    }

    public function setFirstPrice(int $firstPrice){
        $this->first_price = $firstPrice;
    }

    public function getExcessPrice() : int{
        return $this->excess_price;
    }

    public function setExcessPrice(int $excessPrice){
        $this->excess_price = $excessPrice;
    }

    public function getExcess() : int{
        return $this->excess;
    }

    public function setExcess(int $excess){
        $this->excess = $excess;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getFirst() : int{
        return $this->first;
    }

    public function setFirst(int $first){
        $this->first = $first;
    }


}


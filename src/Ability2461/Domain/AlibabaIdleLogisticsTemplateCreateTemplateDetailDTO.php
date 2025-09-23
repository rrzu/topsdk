<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateCreateTemplateDetailDTO {

    /**
        收货地址id，创建的时候，能且只能包含一个默认子模版（division_id为0），子模版之间的division_id不能重复
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
        收费类型，默认填写2
     **/
    public $fee_type;

    /**
        收货地址等级，省1市2区3
     **/
    public $receive_level;

    /**
        操作类型，本接口填写add
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
        续重件数
     **/
    public $excess;

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

    public function getFirst() : int{
        return $this->first;
    }

    public function setFirst(int $first){
        $this->first = $first;
    }


}


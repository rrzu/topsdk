<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateQueryListTemplateDetailDTO {

    /**
        续重件数
     **/
    public $excess;

    /**
        收件地址id
     **/
    public $receive_division_id;

    /**
        运送类型，快递为1
     **/
    public $delivery_type;

    /**
        子模版id
     **/
    public $id;

    /**
        收费类型，默认写2
     **/
    public $fee_type;

    /**
        首重件数
     **/
    public $first;

    /**
        首重价格
     **/
    public $first_price;

    /**
        续重价格
     **/
    public $excess_price;

    /**
        收件地址名称
     **/
    public $receive_division_name;

    /**
        收件地址级别，1省2市3区
     **/
    public $receive_level;


    public function getExcess() : int{
        return $this->excess;
    }

    public function setExcess(int $excess){
        $this->excess = $excess;
    }

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

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getFeeType() : int{
        return $this->fee_type;
    }

    public function setFeeType(int $feeType){
        $this->fee_type = $feeType;
    }

    public function getFirst() : int{
        return $this->first;
    }

    public function setFirst(int $first){
        $this->first = $first;
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

    public function getReceiveDivisionName() : string{
        return $this->receive_division_name;
    }

    public function setReceiveDivisionName(string $receiveDivisionName){
        $this->receive_division_name = $receiveDivisionName;
    }

    public function getReceiveLevel() : int{
        return $this->receive_level;
    }

    public function setReceiveLevel(int $receiveLevel){
        $this->receive_level = $receiveLevel;
    }


}


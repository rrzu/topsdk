<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemShipTypeIdleVirtualItemShipDO {

    /**
        商品id
     **/
    public $item_id;

    /**
        使用链接
     **/
    public $use_url;

    /**
        服务商供货价格
     **/
    public $supply_price;

    /**
        发货类型
     **/
    public $ship_type;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getUseUrl() : string{
        return $this->use_url;
    }

    public function setUseUrl(string $useUrl){
        $this->use_url = $useUrl;
    }

    public function getSupplyPrice() : string{
        return $this->supply_price;
    }

    public function setSupplyPrice(string $supplyPrice){
        $this->supply_price = $supplyPrice;
    }

    public function getShipType() : string{
        return $this->ship_type;
    }

    public function setShipType(string $shipType){
        $this->ship_type = $shipType;
    }


}


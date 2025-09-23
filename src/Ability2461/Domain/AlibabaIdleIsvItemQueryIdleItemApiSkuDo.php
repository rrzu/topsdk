<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiSkuDo {

    /**
        skuId
     **/
    public $sku_id;

    /**
        库存
     **/
    public $quantity;

    /**
        价格，单位分
     **/
    public $price;

    /**
        销售属性列表(最多2个销售属性,每一个的属性值个数为2～10)
     **/
    public $property_list;

    /**
        外部商家标识(商品编码对接ERP等)
     **/
    public $outer_id;

    /**
        sku参考供货价，单位元
     **/
    public $supply_price;

    /**
        cspud
     **/
    public $cspu_id;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getPrice() : int{
        return $this->price;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }

    public function getPropertyList() : array{
        return $this->property_list;
    }

    public function setPropertyList(array $propertyList){
        $this->property_list = $propertyList;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getSupplyPrice() : string{
        return $this->supply_price;
    }

    public function setSupplyPrice(string $supplyPrice){
        $this->supply_price = $supplyPrice;
    }

    public function getCspuId() : int{
        return $this->cspu_id;
    }

    public function setCspuId(int $cspuId){
        $this->cspu_id = $cspuId;
    }


}


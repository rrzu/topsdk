<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiSkuDo {

    /**
        销售属性列表(最多2个销售属性,每一个的属性值个数为2～10)
     **/
    public $property_list;

    /**
        库存
     **/
    public $quantity;

    /**
        价格，单位分
     **/
    public $price;

    /**
        外部商家标识(商品编码等)(长度<=30)
     **/
    public $outer_id;


    public function getPropertyList() : array{
        return $this->property_list;
    }

    public function setPropertyList(array $propertyList){
        $this->property_list = $propertyList;
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

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuBiddingItemPublishCSPUParam {

    /**
        库存
     **/
    public $quantity;

    /**
        价格，单位分
     **/
    public $price;

    /**
        cspuId
     **/
    public $cspu_id;

    /**
        外部商家标识(商品编码等)(长度<=30)
     **/
    public $outer_id;


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

    public function getCspuId() : int{
        return $this->cspu_id;
    }

    public function setCspuId(int $cspuId){
        $this->cspu_id = $cspuId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


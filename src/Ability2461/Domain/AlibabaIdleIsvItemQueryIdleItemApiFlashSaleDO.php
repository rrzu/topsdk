<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiFlashSaleDO {

    /**
        特卖商品标签
     **/
    public $tag;

    /**
        食品的生产日期
     **/
    public $food_pro_date;

    /**
        食品的保质期过期时间
     **/
    public $food_expire_date;

    /**
        大货主ID
     **/
    public $b2c_big_shipper_id;

    /**
        小货主ID
     **/
    public $b2c_small_shipper_id;

    /**
        小货主名称
     **/
    public $b2c_small_shipper_name;

    /**
        淘工厂商品ID
     **/
    public $out_sync_item_id;

    /**
        淘工厂商品名称
     **/
    public $out_sync_item_name;

    /**
        淘工厂SKU ID
     **/
    public $out_sync_sku_id;


    public function getTag() : int{
        return $this->tag;
    }

    public function setTag(int $tag){
        $this->tag = $tag;
    }

    public function getFoodProDate() : string{
        return $this->food_pro_date;
    }

    public function setFoodProDate(string $foodProDate){
        $this->food_pro_date = $foodProDate;
    }

    public function getFoodExpireDate() : string{
        return $this->food_expire_date;
    }

    public function setFoodExpireDate(string $foodExpireDate){
        $this->food_expire_date = $foodExpireDate;
    }

    public function getB2cBigShipperId() : string{
        return $this->b2c_big_shipper_id;
    }

    public function setB2cBigShipperId(string $b2cBigShipperId){
        $this->b2c_big_shipper_id = $b2cBigShipperId;
    }

    public function getB2cSmallShipperId() : string{
        return $this->b2c_small_shipper_id;
    }

    public function setB2cSmallShipperId(string $b2cSmallShipperId){
        $this->b2c_small_shipper_id = $b2cSmallShipperId;
    }

    public function getB2cSmallShipperName() : string{
        return $this->b2c_small_shipper_name;
    }

    public function setB2cSmallShipperName(string $b2cSmallShipperName){
        $this->b2c_small_shipper_name = $b2cSmallShipperName;
    }

    public function getOutSyncItemId() : int{
        return $this->out_sync_item_id;
    }

    public function setOutSyncItemId(int $outSyncItemId){
        $this->out_sync_item_id = $outSyncItemId;
    }

    public function getOutSyncItemName() : string{
        return $this->out_sync_item_name;
    }

    public function setOutSyncItemName(string $outSyncItemName){
        $this->out_sync_item_name = $outSyncItemName;
    }

    public function getOutSyncSkuId() : int{
        return $this->out_sync_sku_id;
    }

    public function setOutSyncSkuId(int $outSyncSkuId){
        $this->out_sync_sku_id = $outSyncSkuId;
    }


}


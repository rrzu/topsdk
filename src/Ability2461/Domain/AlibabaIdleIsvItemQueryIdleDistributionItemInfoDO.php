<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleDistributionItemInfoDO {

    /**
        外部商品id
     **/
    public $out_sync_item_id;

    /**
        货品ID
     **/
    public $product_id;

    /**
        外部bizCode
     **/
    public $out_sync_item_biz_code;

    /**
        分销商用户ID
     **/
    public $distributor_user_id;

    /**
        商品来源
     **/
    public $source_from;

    /**
        供应商id
     **/
    public $out_supply_id;

    /**
        一级渠道Id
     **/
    public $primary_channel_code;

    /**
        二级渠道Id
     **/
    public $sub_channel_code;

    /**
        库存等级
     **/
    public $out_sync_inventory_grade;

    /**
        外部skuId
     **/
    public $out_sync_sku_id;

    /**
        是否需要成色定制表达：千牛
     **/
    public $need_stuff_custom;

    /**
        成色定制表达-valueId：千牛
     **/
    public $stuff_value_id;

    /**
        成色定制表达-valueName：千牛
     **/
    public $stuff_value_name;


    public function getOutSyncItemId() : string{
        return $this->out_sync_item_id;
    }

    public function setOutSyncItemId(string $outSyncItemId){
        $this->out_sync_item_id = $outSyncItemId;
    }

    public function getProductId() : string{
        return $this->product_id;
    }

    public function setProductId(string $productId){
        $this->product_id = $productId;
    }

    public function getOutSyncItemBizCode() : string{
        return $this->out_sync_item_biz_code;
    }

    public function setOutSyncItemBizCode(string $outSyncItemBizCode){
        $this->out_sync_item_biz_code = $outSyncItemBizCode;
    }

    public function getDistributorUserId() : string{
        return $this->distributor_user_id;
    }

    public function setDistributorUserId(string $distributorUserId){
        $this->distributor_user_id = $distributorUserId;
    }

    public function getSourceFrom() : string{
        return $this->source_from;
    }

    public function setSourceFrom(string $sourceFrom){
        $this->source_from = $sourceFrom;
    }

    public function getOutSupplyId() : string{
        return $this->out_supply_id;
    }

    public function setOutSupplyId(string $outSupplyId){
        $this->out_supply_id = $outSupplyId;
    }

    public function getPrimaryChannelCode() : string{
        return $this->primary_channel_code;
    }

    public function setPrimaryChannelCode(string $primaryChannelCode){
        $this->primary_channel_code = $primaryChannelCode;
    }

    public function getSubChannelCode() : string{
        return $this->sub_channel_code;
    }

    public function setSubChannelCode(string $subChannelCode){
        $this->sub_channel_code = $subChannelCode;
    }

    public function getOutSyncInventoryGrade() : string{
        return $this->out_sync_inventory_grade;
    }

    public function setOutSyncInventoryGrade(string $outSyncInventoryGrade){
        $this->out_sync_inventory_grade = $outSyncInventoryGrade;
    }

    public function getOutSyncSkuId() : string{
        return $this->out_sync_sku_id;
    }

    public function setOutSyncSkuId(string $outSyncSkuId){
        $this->out_sync_sku_id = $outSyncSkuId;
    }

    public function getNeedStuffCustom() : bool{
        return $this->need_stuff_custom;
    }

    public function setNeedStuffCustom(bool $needStuffCustom){
        $this->need_stuff_custom = $needStuffCustom;
    }

    public function getStuffValueId() : string{
        return $this->stuff_value_id;
    }

    public function setStuffValueId(string $stuffValueId){
        $this->stuff_value_id = $stuffValueId;
    }

    public function getStuffValueName() : string{
        return $this->stuff_value_name;
    }

    public function setStuffValueName(string $stuffValueName){
        $this->stuff_value_name = $stuffValueName;
    }


}


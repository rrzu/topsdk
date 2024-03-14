<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvGoosefishOrderCreateOrderCreateRequest {

    /**
        是否为虚拟商品下单，默认为false
     **/
    public $virtual_item_order;

    /**
        商品id，virtual_item_order为false时必传
     **/
    public $item_id;

    /**
        商品单价，单位分。
     **/
    public $amount;

    /**
        额外信息
     **/
    public $extra_data;

    /**
        虚拟商品code，virtual_item_order为true时必传
     **/
    public $virtual_item_code;

    /**
        业务产品标识
     **/
    public $x_global_biz_code;

    /**
        购买数量，默认1个
     **/
    public $buy_quantity;

    /**
        邮寄地址的ID。不传入表示不需要邮寄
     **/
    public $deliver_id;


    public function getVirtualItemOrder() : bool{
        return $this->virtual_item_order;
    }

    public function setVirtualItemOrder(bool $virtualItemOrder){
        $this->virtual_item_order = $virtualItemOrder;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getExtraData() : array{
        return $this->extra_data;
    }

    public function setExtraData(array $extraData){
        $this->extra_data = $extraData;
    }

    public function getVirtualItemCode() : string{
        return $this->virtual_item_code;
    }

    public function setVirtualItemCode(string $virtualItemCode){
        $this->virtual_item_code = $virtualItemCode;
    }

    public function getXGlobalBizCode() : string{
        return $this->x_global_biz_code;
    }

    public function setXGlobalBizCode(string $xGlobalBizCode){
        $this->x_global_biz_code = $xGlobalBizCode;
    }

    public function getBuyQuantity() : int{
        return $this->buy_quantity;
    }

    public function setBuyQuantity(int $buyQuantity){
        $this->buy_quantity = $buyQuantity;
    }

    public function getDeliverId() : string{
        return $this->deliver_id;
    }

    public function setDeliverId(string $deliverId){
        $this->deliver_id = $deliverId;
    }


}


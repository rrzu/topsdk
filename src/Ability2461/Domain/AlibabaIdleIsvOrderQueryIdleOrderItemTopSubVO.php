<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderItemTopSubVO {

    /**
        商品ID
     **/
    public $item_id;

    /**
        商品图片,绝对途径
     **/
    public $pic_url;

    /**
        商品价格，单位分
     **/
    public $price;

    /**
        商品标题
     **/
    public $title;

    /**
        商品外部编码（SPU维度）
     **/
    public $outer_id_spu;

    /**
        商品外部编码（SKU维度）
     **/
    public $outer_id_sku;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getPrice() : int{
        return $this->price;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getOuterIdSpu() : string{
        return $this->outer_id_spu;
    }

    public function setOuterIdSpu(string $outerIdSpu){
        $this->outer_id_spu = $outerIdSpu;
    }

    public function getOuterIdSku() : string{
        return $this->outer_id_sku;
    }

    public function setOuterIdSku(string $outerIdSku){
        $this->outer_id_sku = $outerIdSku;
    }


}


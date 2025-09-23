<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiBrandBargainDO {

    /**
        成色
     **/
    public $item_stuff;

    /**
        商品生产日期
     **/
    public $produce_date;

    /**
        保质期（天）
     **/
    public $shelf_life;

    /**
        供应商
     **/
    public $supplier;

    /**
        证照图片
     **/
    public $cert_pic_id;


    public function getItemStuff() : string{
        return $this->item_stuff;
    }

    public function setItemStuff(string $itemStuff){
        $this->item_stuff = $itemStuff;
    }

    public function getProduceDate() : string{
        return $this->produce_date;
    }

    public function setProduceDate(string $produceDate){
        $this->produce_date = $produceDate;
    }

    public function getShelfLife() : string{
        return $this->shelf_life;
    }

    public function setShelfLife(string $shelfLife){
        $this->shelf_life = $shelfLife;
    }

    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }

    public function getCertPicId() : int{
        return $this->cert_pic_id;
    }

    public function setCertPicId(int $certPicId){
        $this->cert_pic_id = $certPicId;
    }


}


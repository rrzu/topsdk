<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiBrandBargainDO {

    /**
        品牌成色
     **/
    public $item_stuff;

    /**
        生产日期，时间戳
     **/
    public $produce_date;

    /**
        保质期, 多少天过期
     **/
    public $shelf_life;

    /**
        供应商名称
     **/
    public $supplier;

    /**
        证照图片文件id
     **/
    public $cert_pic_id;

    /**
        证照图片url
     **/
    public $cert_pic_url;


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

    public function getCertPicUrl() : string{
        return $this->cert_pic_url;
    }

    public function setCertPicUrl(string $certPicUrl){
        $this->cert_pic_url = $certPicUrl;
    }


}


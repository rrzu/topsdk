<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyChouShangPostStockVO {

    /**
        奖品id
     **/
    public $prize_id;

    /**
        奖品名称
     **/
    public $prize_title;

    /**
        奖品图片
     **/
    public $prize_pic_url;

    /**
        奖品属性描述
     **/
    public $prize_property_desc;

    /**
        奖品发货状态描述 （现货/ 预售）
     **/
    public $prize_delivery_status_desc;

    /**
        奖品数量
     **/
    public $prize_count;


    public function getPrizeId() : int{
        return $this->prize_id;
    }

    public function setPrizeId(int $prizeId){
        $this->prize_id = $prizeId;
    }

    public function getPrizeTitle() : string{
        return $this->prize_title;
    }

    public function setPrizeTitle(string $prizeTitle){
        $this->prize_title = $prizeTitle;
    }

    public function getPrizePicUrl() : string{
        return $this->prize_pic_url;
    }

    public function setPrizePicUrl(string $prizePicUrl){
        $this->prize_pic_url = $prizePicUrl;
    }

    public function getPrizePropertyDesc() : string{
        return $this->prize_property_desc;
    }

    public function setPrizePropertyDesc(string $prizePropertyDesc){
        $this->prize_property_desc = $prizePropertyDesc;
    }

    public function getPrizeDeliveryStatusDesc() : string{
        return $this->prize_delivery_status_desc;
    }

    public function setPrizeDeliveryStatusDesc(string $prizeDeliveryStatusDesc){
        $this->prize_delivery_status_desc = $prizeDeliveryStatusDesc;
    }

    public function getPrizeCount() : int{
        return $this->prize_count;
    }

    public function setPrizeCount(int $prizeCount){
        $this->prize_count = $prizeCount;
    }


}


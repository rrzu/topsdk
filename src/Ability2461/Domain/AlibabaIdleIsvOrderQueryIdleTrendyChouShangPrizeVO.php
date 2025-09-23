<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyChouShangPrizeVO {

    /**
        奖品id
     **/
    public $prize_id;

    /**
        奖品标题
     **/
    public $prize_title;

    /**
        奖品等级
     **/
    public $prize_level;

    /**
        奖品图片url
     **/
    public $prize_pic_url;

    /**
        奖品属性描述
     **/
    public $prize_property_desc;

    /**
        奖品发货状态
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

    public function getPrizeLevel() : string{
        return $this->prize_level;
    }

    public function setPrizeLevel(string $prizeLevel){
        $this->prize_level = $prizeLevel;
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


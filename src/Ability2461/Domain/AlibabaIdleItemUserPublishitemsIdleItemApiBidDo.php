<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleItemUserPublishitemsIdleItemApiBidDo {

    /**
        拍卖商品id(与闲鱼商品id item_id不是同一个)
     **/
    public $bid_item_id;

    /**
        拍卖开始时间,毫秒时间戳(精度为分钟)
     **/
    public $bid_start_time;

    /**
        拍卖结束时间,毫秒时间戳(精度为分钟)
     **/
    public $bid_end_time;

    /**
        当前出价金额, 最高出价, 单位分(起拍价使用reserve_price)
     **/
    public $current_bid_price;

    /**
        总出价次数
     **/
    public $bid_count;


    public function getBidItemId() : int{
        return $this->bid_item_id;
    }

    public function setBidItemId(int $bidItemId){
        $this->bid_item_id = $bidItemId;
    }

    public function getBidStartTime() : int{
        return $this->bid_start_time;
    }

    public function setBidStartTime(int $bidStartTime){
        $this->bid_start_time = $bidStartTime;
    }

    public function getBidEndTime() : int{
        return $this->bid_end_time;
    }

    public function setBidEndTime(int $bidEndTime){
        $this->bid_end_time = $bidEndTime;
    }

    public function getCurrentBidPrice() : int{
        return $this->current_bid_price;
    }

    public function setCurrentBidPrice(int $currentBidPrice){
        $this->current_bid_price = $currentBidPrice;
    }

    public function getBidCount() : int{
        return $this->bid_count;
    }

    public function setBidCount(int $bidCount){
        $this->bid_count = $bidCount;
    }


}


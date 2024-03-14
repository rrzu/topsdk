<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiBidDo {

    /**
        拍卖商品id
     **/
    public $bid_item_id;

    /**
        拍卖开始时间,传入豪秒时间戳(底层精度为分钟)
     **/
    public $bid_start_time;

    /**
        拍卖结束时间,传入豪秒时间戳(底层精度为分钟)
     **/
    public $bid_end_time;

    /**
        买家参拍保证金金额，单位：分
     **/
    public $bid_bail;

    /**
        出价幅度金额(起拍价使用reserve_price)，单位：分
     **/
    public $bid_step;


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

    public function getBidBail() : int{
        return $this->bid_bail;
    }

    public function setBidBail(int $bidBail){
        $this->bid_bail = $bidBail;
    }

    public function getBidStep() : int{
        return $this->bid_step;
    }

    public function setBidStep(int $bidStep){
        $this->bid_step = $bidStep;
    }


}


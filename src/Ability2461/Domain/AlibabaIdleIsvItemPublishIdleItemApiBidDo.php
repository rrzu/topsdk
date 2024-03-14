<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiBidDo {

    /**
        拍卖起拍时间戳，单位毫秒
     **/
    public $bid_start_time;

    /**
        拍卖结束时间戳，单位毫秒
     **/
    public $bid_end_time;

    /**
        保证金金额，单位分
     **/
    public $bid_bail;

    /**
        出价幅度，单位分；起拍价使用reserve_price
     **/
    public $bid_step;


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


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvRateCreateRequest {

    /**
        交易订单ID
     **/
    private $tradeId;

    /**
        评价结果1好评0默认
     **/
    private $rate;

    /**
        评论内容
     **/
    private $feedback;

    /**
        评价类型0首次评价1追评
     **/
    private $rateType;


    public function getTradeId() : int{
        return $this->tradeId;
    }

    public function setTradeId(int $tradeId){
        $this->tradeId = $tradeId;
    }

    public function getRate() : int{
        return $this->rate;
    }

    public function setRate(int $rate){
        $this->rate = $rate;
    }

    public function getFeedback() : string{
        return $this->feedback;
    }

    public function setFeedback(string $feedback){
        $this->feedback = $feedback;
    }

    public function getRateType() : int{
        return $this->rateType;
    }

    public function setRateType(int $rateType){
        $this->rateType = $rateType;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.rate.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tradeId)) {
            $requestParam["trade_id"] = TopUtil::convertBasic($this->tradeId);
        }

        if (!TopUtil::checkEmpty($this->rate)) {
            $requestParam["rate"] = TopUtil::convertBasic($this->rate);
        }

        if (!TopUtil::checkEmpty($this->feedback)) {
            $requestParam["feedback"] = TopUtil::convertBasic($this->feedback);
        }

        if (!TopUtil::checkEmpty($this->rateType)) {
            $requestParam["rate_type"] = TopUtil::convertBasic($this->rateType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


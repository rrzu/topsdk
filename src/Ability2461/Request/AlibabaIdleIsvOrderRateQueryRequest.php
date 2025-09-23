<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderRateQueryOrderAndRateQryRequest;

class AlibabaIdleIsvOrderRateQueryRequest {

    /**
        查询订单和评价入参
     **/
    private $orderAndRateQryRequest;


    public function getOrderAndRateQryRequest() : AlibabaIdleIsvOrderRateQueryOrderAndRateQryRequest{
        return $this->orderAndRateQryRequest;
    }

    public function setOrderAndRateQryRequest(AlibabaIdleIsvOrderRateQueryOrderAndRateQryRequest $orderAndRateQryRequest){
        $this->orderAndRateQryRequest = $orderAndRateQryRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.rate.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderAndRateQryRequest)) {
            $requestParam["order_and_rate_qry_request"] = TopUtil::convertStruct($this->orderAndRateQryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderDealrefundAppraiseIsvRefundRequest;

class AlibabaIdleIsvOrderDealrefundRequest {

    /**
        退款参数
     **/
    private $paramAppraiseIsvRefundRequest;


    public function getParamAppraiseIsvRefundRequest() : AlibabaIdleIsvOrderDealrefundAppraiseIsvRefundRequest{
        return $this->paramAppraiseIsvRefundRequest;
    }

    public function setParamAppraiseIsvRefundRequest(AlibabaIdleIsvOrderDealrefundAppraiseIsvRefundRequest $paramAppraiseIsvRefundRequest){
        $this->paramAppraiseIsvRefundRequest = $paramAppraiseIsvRefundRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.dealrefund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramAppraiseIsvRefundRequest)) {
            $requestParam["param_appraise_isv_refund_request"] = TopUtil::convertStruct($this->paramAppraiseIsvRefundRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


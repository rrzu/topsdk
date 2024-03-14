<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvOrderBuyerRefundTopRefundParam;

class AlibabaIdleIsvOrderBuyerRefundRequest {

    /**
        退款参数
     **/
    private $topRefundParam;


    public function getTopRefundParam() : AlibabaIdleIsvOrderBuyerRefundTopRefundParam{
        return $this->topRefundParam;
    }

    public function setTopRefundParam(AlibabaIdleIsvOrderBuyerRefundTopRefundParam $topRefundParam){
        $this->topRefundParam = $topRefundParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.buyer.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->topRefundParam)) {
            $requestParam["top_refund_param"] = TopUtil::convertStruct($this->topRefundParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


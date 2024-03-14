<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvOrderAfterSendRefundTopRefundParam;

class AlibabaIdleIsvOrderAfterSendRefundRequest {

    /**
        退款参数
     **/
    private $topRefundParam;


    public function getTopRefundParam() : AlibabaIdleIsvOrderAfterSendRefundTopRefundParam{
        return $this->topRefundParam;
    }

    public function setTopRefundParam(AlibabaIdleIsvOrderAfterSendRefundTopRefundParam $topRefundParam){
        $this->topRefundParam = $topRefundParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.after.send.refund";
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


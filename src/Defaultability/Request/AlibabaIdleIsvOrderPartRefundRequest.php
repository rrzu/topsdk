<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvOrderPartRefundTopPartRefundParam;

class AlibabaIdleIsvOrderPartRefundRequest {

    /**
        退款参数
     **/
    private $topPartRefundParam;


    public function getTopPartRefundParam() : AlibabaIdleIsvOrderPartRefundTopPartRefundParam{
        return $this->topPartRefundParam;
    }

    public function setTopPartRefundParam(AlibabaIdleIsvOrderPartRefundTopPartRefundParam $topPartRefundParam){
        $this->topPartRefundParam = $topPartRefundParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.part.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->topPartRefundParam)) {
            $requestParam["top_part_refund_param"] = TopUtil::convertStruct($this->topPartRefundParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


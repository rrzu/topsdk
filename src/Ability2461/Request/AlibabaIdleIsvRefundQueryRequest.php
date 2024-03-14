<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvRefundQueryAppraiseIsvOrderQuery;

class AlibabaIdleIsvRefundQueryRequest {

    /**
        系统自动生成
     **/
    private $paramAppraiseIsvOrderQuery;


    public function getParamAppraiseIsvOrderQuery() : AlibabaIdleIsvRefundQueryAppraiseIsvOrderQuery{
        return $this->paramAppraiseIsvOrderQuery;
    }

    public function setParamAppraiseIsvOrderQuery(AlibabaIdleIsvRefundQueryAppraiseIsvOrderQuery $paramAppraiseIsvOrderQuery){
        $this->paramAppraiseIsvOrderQuery = $paramAppraiseIsvOrderQuery;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.refund.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramAppraiseIsvOrderQuery)) {
            $requestParam["param_appraise_isv_order_query"] = TopUtil::convertStruct($this->paramAppraiseIsvOrderQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


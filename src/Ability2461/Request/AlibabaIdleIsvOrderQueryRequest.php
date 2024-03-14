<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderQueryIsvQueryOrderDataQry;

class AlibabaIdleIsvOrderQueryRequest {

    /**
        订单查询接口入参
     **/
    private $paramAppraiseIsvOrderQuery;


    public function getParamAppraiseIsvOrderQuery() : AlibabaIdleIsvOrderQueryIsvQueryOrderDataQry{
        return $this->paramAppraiseIsvOrderQuery;
    }

    public function setParamAppraiseIsvOrderQuery(AlibabaIdleIsvOrderQueryIsvQueryOrderDataQry $paramAppraiseIsvOrderQuery){
        $this->paramAppraiseIsvOrderQuery = $paramAppraiseIsvOrderQuery;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.query";
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


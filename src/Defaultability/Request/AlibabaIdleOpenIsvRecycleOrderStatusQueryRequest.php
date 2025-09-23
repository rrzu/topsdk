<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleOpenIsvRecycleOrderStatusQueryIdleOpenOrderStatusQueryParam;

class AlibabaIdleOpenIsvRecycleOrderStatusQueryRequest {

    /**
        订单查询入参
     **/
    private $idleOpenOrderStatusQueryParam;


    public function getIdleOpenOrderStatusQueryParam() : AlibabaIdleOpenIsvRecycleOrderStatusQueryIdleOpenOrderStatusQueryParam{
        return $this->idleOpenOrderStatusQueryParam;
    }

    public function setIdleOpenOrderStatusQueryParam(AlibabaIdleOpenIsvRecycleOrderStatusQueryIdleOpenOrderStatusQueryParam $idleOpenOrderStatusQueryParam){
        $this->idleOpenOrderStatusQueryParam = $idleOpenOrderStatusQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.open.isv.recycle.order.status.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleOpenOrderStatusQueryParam)) {
            $requestParam["idle_open_order_status_query_param"] = TopUtil::convertStruct($this->idleOpenOrderStatusQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


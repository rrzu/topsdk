<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseOrderDummyConsignAppraiseIsvDummyConsignRequest;

class AlibabaIdleIsvLeaseOrderDummyConsignRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseOrderDummyConsignAppraiseIsvDummyConsignRequest{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseOrderDummyConsignAppraiseIsvDummyConsignRequest $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.order.dummy.consign";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


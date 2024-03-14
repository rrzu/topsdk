<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvGoosefishOrderSellercreateOrderCreateRequest;

class AlibabaIdleIsvGoosefishOrderSellercreateRequest {

    /**
        创单请求参数
     **/
    private $orderCreateRequest;


    public function getOrderCreateRequest() : AlibabaIdleIsvGoosefishOrderSellercreateOrderCreateRequest{
        return $this->orderCreateRequest;
    }

    public function setOrderCreateRequest(AlibabaIdleIsvGoosefishOrderSellercreateOrderCreateRequest $orderCreateRequest){
        $this->orderCreateRequest = $orderCreateRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.goosefish.order.sellercreate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderCreateRequest)) {
            $requestParam["order_create_request"] = TopUtil::convertStruct($this->orderCreateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvGoosefishOrderCreateOrderCreateRequest;

class AlibabaIdleIsvGoosefishOrderCreateRequest {

    /**
        创单请求参数
     **/
    private $orderCreateRequest;


    public function getOrderCreateRequest() : AlibabaIdleIsvGoosefishOrderCreateOrderCreateRequest{
        return $this->orderCreateRequest;
    }

    public function setOrderCreateRequest(AlibabaIdleIsvGoosefishOrderCreateOrderCreateRequest $orderCreateRequest){
        $this->orderCreateRequest = $orderCreateRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.goosefish.order.create";
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


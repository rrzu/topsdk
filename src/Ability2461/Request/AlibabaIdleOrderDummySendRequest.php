<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleOrderDummySendOrderDummySendRequest;

class AlibabaIdleOrderDummySendRequest {

    /**
        请求
     **/
    private $paramOrderDummySendRequest;


    public function getParamOrderDummySendRequest() : AlibabaIdleOrderDummySendOrderDummySendRequest{
        return $this->paramOrderDummySendRequest;
    }

    public function setParamOrderDummySendRequest(AlibabaIdleOrderDummySendOrderDummySendRequest $paramOrderDummySendRequest){
        $this->paramOrderDummySendRequest = $paramOrderDummySendRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.order.dummy.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramOrderDummySendRequest)) {
            $requestParam["param_order_dummy_send_request"] = TopUtil::convertStruct($this->paramOrderDummySendRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


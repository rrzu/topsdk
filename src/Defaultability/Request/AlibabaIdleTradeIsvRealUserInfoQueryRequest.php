<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleTradeIsvRealUserInfoQueryRealUserRequest;

class AlibabaIdleTradeIsvRealUserInfoQueryRequest {

    /**
        入参
     **/
    private $realUserRequest;


    public function getRealUserRequest() : AlibabaIdleTradeIsvRealUserInfoQueryRealUserRequest{
        return $this->realUserRequest;
    }

    public function setRealUserRequest(AlibabaIdleTradeIsvRealUserInfoQueryRealUserRequest $realUserRequest){
        $this->realUserRequest = $realUserRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.trade.isv.real.user.info.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->realUserRequest)) {
            $requestParam["real_user_request"] = TopUtil::convertStruct($this->realUserRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleUserPermitUserGrantRequest;

class AlibabaIdleUserPermitRequest {

    /**
        授权请求
     **/
    private $paramUserGrantRequest;


    public function getParamUserGrantRequest() : AlibabaIdleUserPermitUserGrantRequest{
        return $this->paramUserGrantRequest;
    }

    public function setParamUserGrantRequest(AlibabaIdleUserPermitUserGrantRequest $paramUserGrantRequest){
        $this->paramUserGrantRequest = $paramUserGrantRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.user.permit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramUserGrantRequest)) {
            $requestParam["param_user_grant_request"] = TopUtil::convertStruct($this->paramUserGrantRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


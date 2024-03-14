<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleUserPermitRevokeUserPermitCmd;

class AlibabaIdleUserPermitRevokeRequest {

    /**
        撤销用户授权请求参数
     **/
    private $userPermitCmd;


    public function getUserPermitCmd() : AlibabaIdleUserPermitRevokeUserPermitCmd{
        return $this->userPermitCmd;
    }

    public function setUserPermitCmd(AlibabaIdleUserPermitRevokeUserPermitCmd $userPermitCmd){
        $this->userPermitCmd = $userPermitCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.user.permit.revoke";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->userPermitCmd)) {
            $requestParam["user_permit_cmd"] = TopUtil::convertStruct($this->userPermitCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


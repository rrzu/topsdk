<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvUserAuthorizeAddUserAuthorizationCmd;

class AlibabaIdleIsvUserAuthorizeRequest {

    /**
        添加用户授权信息
     **/
    private $addUserAuthorizationCmd;


    public function getAddUserAuthorizationCmd() : AlibabaIdleIsvUserAuthorizeAddUserAuthorizationCmd{
        return $this->addUserAuthorizationCmd;
    }

    public function setAddUserAuthorizationCmd(AlibabaIdleIsvUserAuthorizeAddUserAuthorizationCmd $addUserAuthorizationCmd){
        $this->addUserAuthorizationCmd = $addUserAuthorizationCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.user.authorize";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addUserAuthorizationCmd)) {
            $requestParam["add_user_authorization_cmd"] = TopUtil::convertStruct($this->addUserAuthorizationCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


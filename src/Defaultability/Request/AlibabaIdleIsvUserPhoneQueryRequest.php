<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvUserPhoneQueryIdleUserPhoneQry;

class AlibabaIdleIsvUserPhoneQueryRequest {

    /**
        查询手机号请求参数
     **/
    private $idleUserPhoneQry;


    public function getIdleUserPhoneQry() : AlibabaIdleIsvUserPhoneQueryIdleUserPhoneQry{
        return $this->idleUserPhoneQry;
    }

    public function setIdleUserPhoneQry(AlibabaIdleIsvUserPhoneQueryIdleUserPhoneQry $idleUserPhoneQry){
        $this->idleUserPhoneQry = $idleUserPhoneQry;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.user.phone.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleUserPhoneQry)) {
            $requestParam["idle_user_phone_qry"] = TopUtil::convertStruct($this->idleUserPhoneQry);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


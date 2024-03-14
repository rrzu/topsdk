<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleUserPermitQueryUserPermitQry;

class AlibabaIdleUserPermitQueryRequest {

    /**
        用户权限关系查询查询参数
     **/
    private $userPermitQry;


    public function getUserPermitQry() : AlibabaIdleUserPermitQueryUserPermitQry{
        return $this->userPermitQry;
    }

    public function setUserPermitQry(AlibabaIdleUserPermitQueryUserPermitQry $userPermitQry){
        $this->userPermitQry = $userPermitQry;
    }


    public function getApiName() : string {
        return "alibaba.idle.user.permit.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->userPermitQry)) {
            $requestParam["user_permit_qry"] = TopUtil::convertStruct($this->userPermitQry);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


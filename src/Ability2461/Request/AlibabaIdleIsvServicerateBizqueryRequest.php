<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdQry;

class AlibabaIdleIsvServicerateBizqueryRequest {

    /**
        查询参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdQry{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdQry $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.servicerate.bizquery";
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


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvPvQueryCpvQueryParam;

class AlibabaIdleIsvPvQueryRequest {

    /**
        入参对象
     **/
    private $youpinCpvQry;


    public function getYoupinCpvQry() : AlibabaIdleIsvPvQueryCpvQueryParam{
        return $this->youpinCpvQry;
    }

    public function setYoupinCpvQry(AlibabaIdleIsvPvQueryCpvQueryParam $youpinCpvQry){
        $this->youpinCpvQry = $youpinCpvQry;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.pv.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->youpinCpvQry)) {
            $requestParam["youpin_cpv_qry"] = TopUtil::convertStruct($this->youpinCpvQry);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


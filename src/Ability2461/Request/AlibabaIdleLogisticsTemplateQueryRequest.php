<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLogisticsTemplateQueryIdleLogisticsTemplateQueryParam;

class AlibabaIdleLogisticsTemplateQueryRequest {

    /**
        入参
     **/
    private $param;


    public function getParam() : AlibabaIdleLogisticsTemplateQueryIdleLogisticsTemplateQueryParam{
        return $this->param;
    }

    public function setParam(AlibabaIdleLogisticsTemplateQueryIdleLogisticsTemplateQueryParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.logistics.template.query";
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


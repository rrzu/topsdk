<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLogisticsTemplateDeleteIdleLogisticsTemplateDeleteParam;

class AlibabaIdleLogisticsTemplateDeleteRequest {

    /**
        入参
     **/
    private $param;


    public function getParam() : AlibabaIdleLogisticsTemplateDeleteIdleLogisticsTemplateDeleteParam{
        return $this->param;
    }

    public function setParam(AlibabaIdleLogisticsTemplateDeleteIdleLogisticsTemplateDeleteParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.logistics.template.delete";
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


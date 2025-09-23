<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLogisticsTemplateQueryListIdleLogisticsTemplateQueryParam;

class AlibabaIdleLogisticsTemplateQueryListRequest {

    /**
        查询参数
     **/
    private $idleLogisticsTemplateQueryParam;


    public function getIdleLogisticsTemplateQueryParam() : AlibabaIdleLogisticsTemplateQueryListIdleLogisticsTemplateQueryParam{
        return $this->idleLogisticsTemplateQueryParam;
    }

    public function setIdleLogisticsTemplateQueryParam(AlibabaIdleLogisticsTemplateQueryListIdleLogisticsTemplateQueryParam $idleLogisticsTemplateQueryParam){
        $this->idleLogisticsTemplateQueryParam = $idleLogisticsTemplateQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.logistics.template.query.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleLogisticsTemplateQueryParam)) {
            $requestParam["idle_logistics_template_query_param"] = TopUtil::convertStruct($this->idleLogisticsTemplateQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLogisticsTemplateUpdateIdleLogisticsTemplateUpdateParam;

class AlibabaIdleLogisticsTemplateUpdateRequest {

    /**
        入参
     **/
    private $idleLogisticsTemplateUpdateParam;


    public function getIdleLogisticsTemplateUpdateParam() : AlibabaIdleLogisticsTemplateUpdateIdleLogisticsTemplateUpdateParam{
        return $this->idleLogisticsTemplateUpdateParam;
    }

    public function setIdleLogisticsTemplateUpdateParam(AlibabaIdleLogisticsTemplateUpdateIdleLogisticsTemplateUpdateParam $idleLogisticsTemplateUpdateParam){
        $this->idleLogisticsTemplateUpdateParam = $idleLogisticsTemplateUpdateParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.logistics.template.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleLogisticsTemplateUpdateParam)) {
            $requestParam["idle_logistics_template_update_param"] = TopUtil::convertStruct($this->idleLogisticsTemplateUpdateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


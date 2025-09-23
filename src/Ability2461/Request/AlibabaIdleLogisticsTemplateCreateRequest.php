<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLogisticsTemplateCreateIdleLogisticsTemplateCreateParam;

class AlibabaIdleLogisticsTemplateCreateRequest {

    /**
        入参
     **/
    private $idleLogisticsTemplateCreateParam;


    public function getIdleLogisticsTemplateCreateParam() : AlibabaIdleLogisticsTemplateCreateIdleLogisticsTemplateCreateParam{
        return $this->idleLogisticsTemplateCreateParam;
    }

    public function setIdleLogisticsTemplateCreateParam(AlibabaIdleLogisticsTemplateCreateIdleLogisticsTemplateCreateParam $idleLogisticsTemplateCreateParam){
        $this->idleLogisticsTemplateCreateParam = $idleLogisticsTemplateCreateParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.logistics.template.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleLogisticsTemplateCreateParam)) {
            $requestParam["idle_logistics_template_create_param"] = TopUtil::convertStruct($this->idleLogisticsTemplateCreateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


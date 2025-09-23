<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvGpuTemplateAddGpuTemplateOperateParam;

class AlibabaIdleIsvGpuTemplateAddRequest {

    /**
        gpu模版入参
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvGpuTemplateAddGpuTemplateOperateParam{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvGpuTemplateAddGpuTemplateOperateParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.gpu.template.add";
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


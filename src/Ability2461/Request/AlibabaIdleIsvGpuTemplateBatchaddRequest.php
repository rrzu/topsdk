<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvGpuTemplateBatchaddRequest {

    /**
        批量新增gpu模版入参
     **/
    private $gpuTemplateOperateParam;


    public function getGpuTemplateOperateParam() : array{
        return $this->gpuTemplateOperateParam;
    }

    public function setGpuTemplateOperateParam(array $gpuTemplateOperateParam){
        $this->gpuTemplateOperateParam = $gpuTemplateOperateParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.gpu.template.batchadd";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gpuTemplateOperateParam)) {
            $requestParam["gpu_template_operate_param"] = TopUtil::convertStructList($this->gpuTemplateOperateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


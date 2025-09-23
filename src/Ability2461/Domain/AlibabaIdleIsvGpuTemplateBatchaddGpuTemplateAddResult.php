<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuTemplateBatchaddGpuTemplateAddResult {

    /**
        GPU主键
     **/
    public $gpu_id;

    /**
        GPU模版主键
     **/
    public $gpu_template_id;

    /**
        新增是否成功
     **/
    public $add_success;

    /**
        错误信息
     **/
    public $error_msg;


    public function getGpuId() : int{
        return $this->gpu_id;
    }

    public function setGpuId(int $gpuId){
        $this->gpu_id = $gpuId;
    }

    public function getGpuTemplateId() : int{
        return $this->gpu_template_id;
    }

    public function setGpuTemplateId(int $gpuTemplateId){
        $this->gpu_template_id = $gpuTemplateId;
    }

    public function getAddSuccess() : bool{
        return $this->add_success;
    }

    public function setAddSuccess(bool $addSuccess){
        $this->add_success = $addSuccess;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


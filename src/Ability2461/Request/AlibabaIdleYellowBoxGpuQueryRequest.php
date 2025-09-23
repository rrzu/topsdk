<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleYellowBoxGpuQueryIdleGpuSearchParameter;

class AlibabaIdleYellowBoxGpuQueryRequest {

    /**
        参数
     **/
    private $idleGpuSearchParameter;


    public function getIdleGpuSearchParameter() : AlibabaIdleYellowBoxGpuQueryIdleGpuSearchParameter{
        return $this->idleGpuSearchParameter;
    }

    public function setIdleGpuSearchParameter(AlibabaIdleYellowBoxGpuQueryIdleGpuSearchParameter $idleGpuSearchParameter){
        $this->idleGpuSearchParameter = $idleGpuSearchParameter;
    }


    public function getApiName() : string {
        return "alibaba.idle.yellow.box.gpu.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleGpuSearchParameter)) {
            $requestParam["idle_gpu_search_parameter"] = TopUtil::convertStruct($this->idleGpuSearchParameter);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


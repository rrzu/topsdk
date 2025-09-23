<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvGpuProductCpvUpdateProductCpvInfoOperateParam;

class AlibabaIdleIsvGpuProductCpvUpdateRequest {

    /**
        货号-cpv信息操作入参
     **/
    private $productCpvInfoOperateParam;


    public function getProductCpvInfoOperateParam() : AlibabaIdleIsvGpuProductCpvUpdateProductCpvInfoOperateParam{
        return $this->productCpvInfoOperateParam;
    }

    public function setProductCpvInfoOperateParam(AlibabaIdleIsvGpuProductCpvUpdateProductCpvInfoOperateParam $productCpvInfoOperateParam){
        $this->productCpvInfoOperateParam = $productCpvInfoOperateParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.gpu.product.cpv.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productCpvInfoOperateParam)) {
            $requestParam["product_cpv_info_operate_param"] = TopUtil::convertStruct($this->productCpvInfoOperateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


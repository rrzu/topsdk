<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvProductCpvPageQueryProductCpvInfoQueryParam;

class AlibabaIdleIsvProductCpvPageQueryRequest {

    /**
        货号-cpv信息查询参数
     **/
    private $productCpvInfoQueryParam;


    public function getProductCpvInfoQueryParam() : AlibabaIdleIsvProductCpvPageQueryProductCpvInfoQueryParam{
        return $this->productCpvInfoQueryParam;
    }

    public function setProductCpvInfoQueryParam(AlibabaIdleIsvProductCpvPageQueryProductCpvInfoQueryParam $productCpvInfoQueryParam){
        $this->productCpvInfoQueryParam = $productCpvInfoQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.product.cpv.page.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productCpvInfoQueryParam)) {
            $requestParam["product_cpv_info_query_param"] = TopUtil::convertStruct($this->productCpvInfoQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


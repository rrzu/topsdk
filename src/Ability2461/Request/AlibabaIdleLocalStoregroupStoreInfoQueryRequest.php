<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopQueryParam;

class AlibabaIdleLocalStoregroupStoreInfoQueryRequest {

    /**
        入参
     **/
    private $storeInfoTopQueryParam;


    public function getStoreInfoTopQueryParam() : AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopQueryParam{
        return $this->storeInfoTopQueryParam;
    }

    public function setStoreInfoTopQueryParam(AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopQueryParam $storeInfoTopQueryParam){
        $this->storeInfoTopQueryParam = $storeInfoTopQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.local.storegroup.store.info.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->storeInfoTopQueryParam)) {
            $requestParam["store_info_top_query_param"] = TopUtil::convertStruct($this->storeInfoTopQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


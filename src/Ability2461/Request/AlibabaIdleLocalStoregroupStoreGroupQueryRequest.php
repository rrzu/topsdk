<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopQueryParam;

class AlibabaIdleLocalStoregroupStoreGroupQueryRequest {

    /**
        入参
     **/
    private $storeGroupTopQueryParam;


    public function getStoreGroupTopQueryParam() : AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopQueryParam{
        return $this->storeGroupTopQueryParam;
    }

    public function setStoreGroupTopQueryParam(AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopQueryParam $storeGroupTopQueryParam){
        $this->storeGroupTopQueryParam = $storeGroupTopQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.local.storegroup.store.group.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->storeGroupTopQueryParam)) {
            $requestParam["store_group_top_query_param"] = TopUtil::convertStruct($this->storeGroupTopQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


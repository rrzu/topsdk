<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleGoosefishPromotionActivityInfoQueryPromotionActivityQueryParam;

class AlibabaIdleGoosefishPromotionActivityInfoQueryRequest {

    /**
        活动参与查询入参
     **/
    private $promotionActivityQueryParam;


    public function getPromotionActivityQueryParam() : AlibabaIdleGoosefishPromotionActivityInfoQueryPromotionActivityQueryParam{
        return $this->promotionActivityQueryParam;
    }

    public function setPromotionActivityQueryParam(AlibabaIdleGoosefishPromotionActivityInfoQueryPromotionActivityQueryParam $promotionActivityQueryParam){
        $this->promotionActivityQueryParam = $promotionActivityQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.goosefish.promotion.activity.info.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->promotionActivityQueryParam)) {
            $requestParam["promotion_activity_query_param"] = TopUtil::convertStruct($this->promotionActivityQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


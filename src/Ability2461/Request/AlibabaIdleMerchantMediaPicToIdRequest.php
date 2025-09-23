<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleMerchantMediaPicToIdQueryPicInfo;

class AlibabaIdleMerchantMediaPicToIdRequest {

    /**
        图片url
     **/
    private $picInfo;


    public function getPicInfo() : AlibabaIdleMerchantMediaPicToIdQueryPicInfo{
        return $this->picInfo;
    }

    public function setPicInfo(AlibabaIdleMerchantMediaPicToIdQueryPicInfo $picInfo){
        $this->picInfo = $picInfo;
    }


    public function getApiName() : string {
        return "alibaba.idle.merchant.media.pic.to.id";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->picInfo)) {
            $requestParam["pic_info"] = TopUtil::convertStruct($this->picInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


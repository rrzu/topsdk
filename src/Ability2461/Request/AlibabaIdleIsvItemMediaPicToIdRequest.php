<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemMediaPicToIdQueryPicInfo;

class AlibabaIdleIsvItemMediaPicToIdRequest {

    /**
        图片信息
     **/
    private $picInfo;


    public function getPicInfo() : AlibabaIdleIsvItemMediaPicToIdQueryPicInfo{
        return $this->picInfo;
    }

    public function setPicInfo(AlibabaIdleIsvItemMediaPicToIdQueryPicInfo $picInfo){
        $this->picInfo = $picInfo;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.media.pic.to.id";
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


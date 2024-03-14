<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvPvListRequest {

    /**
        闲鱼渠道类目的id
     **/
    private $channelCatId;

    /**
        系统自动生成
     **/
    private $brandModelInfo;


    public function getChannelCatId() : string{
        return $this->channelCatId;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channelCatId = $channelCatId;
    }

    public function getBrandModelInfo() : array{
        return $this->brandModelInfo;
    }

    public function setBrandModelInfo(array $brandModelInfo){
        $this->brandModelInfo = $brandModelInfo;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.pv.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->channelCatId)) {
            $requestParam["channel_cat_id"] = TopUtil::convertBasic($this->channelCatId);
        }

        if (!TopUtil::checkEmpty($this->brandModelInfo)) {
            $requestParam["brand_model_info"] = TopUtil::convertStructList($this->brandModelInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


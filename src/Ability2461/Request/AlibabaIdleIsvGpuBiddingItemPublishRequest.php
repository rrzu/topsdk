<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvGpuBiddingItemPublishYellowBoxItemCreateCmd;

class AlibabaIdleIsvGpuBiddingItemPublishRequest {

    /**
        商品数据参数
     **/
    private $yellowBoxItemCreateCmd;


    public function getYellowBoxItemCreateCmd() : AlibabaIdleIsvGpuBiddingItemPublishYellowBoxItemCreateCmd{
        return $this->yellowBoxItemCreateCmd;
    }

    public function setYellowBoxItemCreateCmd(AlibabaIdleIsvGpuBiddingItemPublishYellowBoxItemCreateCmd $yellowBoxItemCreateCmd){
        $this->yellowBoxItemCreateCmd = $yellowBoxItemCreateCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.gpu.bidding.item.publish";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->yellowBoxItemCreateCmd)) {
            $requestParam["yellow_box_item_create_cmd"] = TopUtil::convertStruct($this->yellowBoxItemCreateCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


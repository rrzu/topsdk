<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleTrendyGoodValueChangeSubmitOpenIsvGoodValueChangeCmd;

class AlibabaIdleTrendyGoodValueChangeSubmitRequest {

    /**
        入参
     **/
    private $openIsvGoodValueChangeCmd;


    public function getOpenIsvGoodValueChangeCmd() : AlibabaIdleTrendyGoodValueChangeSubmitOpenIsvGoodValueChangeCmd{
        return $this->openIsvGoodValueChangeCmd;
    }

    public function setOpenIsvGoodValueChangeCmd(AlibabaIdleTrendyGoodValueChangeSubmitOpenIsvGoodValueChangeCmd $openIsvGoodValueChangeCmd){
        $this->openIsvGoodValueChangeCmd = $openIsvGoodValueChangeCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.trendy.good.value.change.submit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->openIsvGoodValueChangeCmd)) {
            $requestParam["open_isv_good_value_change_cmd"] = TopUtil::convertStruct($this->openIsvGoodValueChangeCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


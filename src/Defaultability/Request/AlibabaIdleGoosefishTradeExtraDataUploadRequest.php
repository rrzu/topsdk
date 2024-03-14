<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleGoosefishTradeExtraDataUploadTradeExtraDataUpdateParam;

class AlibabaIdleGoosefishTradeExtraDataUploadRequest {

    /**
        交易补充数据参数
     **/
    private $tradeExtraDataUpdateParam;


    public function getTradeExtraDataUpdateParam() : AlibabaIdleGoosefishTradeExtraDataUploadTradeExtraDataUpdateParam{
        return $this->tradeExtraDataUpdateParam;
    }

    public function setTradeExtraDataUpdateParam(AlibabaIdleGoosefishTradeExtraDataUploadTradeExtraDataUpdateParam $tradeExtraDataUpdateParam){
        $this->tradeExtraDataUpdateParam = $tradeExtraDataUpdateParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.goosefish.trade.extra.data.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tradeExtraDataUpdateParam)) {
            $requestParam["trade_extra_data_update_param"] = TopUtil::convertStruct($this->tradeExtraDataUpdateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


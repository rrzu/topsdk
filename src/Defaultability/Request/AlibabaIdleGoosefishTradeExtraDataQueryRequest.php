<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleGoosefishTradeExtraDataQueryIdleOpenIsvTradeExtraDataQueryParam;

class AlibabaIdleGoosefishTradeExtraDataQueryRequest {

    /**
        查询订单附加信息入参
     **/
    private $idleOpenIsvTradeExtraDataQueryParam;


    public function getIdleOpenIsvTradeExtraDataQueryParam() : AlibabaIdleGoosefishTradeExtraDataQueryIdleOpenIsvTradeExtraDataQueryParam{
        return $this->idleOpenIsvTradeExtraDataQueryParam;
    }

    public function setIdleOpenIsvTradeExtraDataQueryParam(AlibabaIdleGoosefishTradeExtraDataQueryIdleOpenIsvTradeExtraDataQueryParam $idleOpenIsvTradeExtraDataQueryParam){
        $this->idleOpenIsvTradeExtraDataQueryParam = $idleOpenIsvTradeExtraDataQueryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.goosefish.trade.extra.data.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleOpenIsvTradeExtraDataQueryParam)) {
            $requestParam["idle_open_isv_trade_extra_data_query_param"] = TopUtil::convertStruct($this->idleOpenIsvTradeExtraDataQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


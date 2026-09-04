<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleTradeGiveUpRecoverDepositIsvGiveUpDepositParam;

class AlibabaIdleTradeGiveUpRecoverDepositRequest {

    /**
        入参
     **/
    private $isvGiveUpDepositParam;


    public function getIsvGiveUpDepositParam() : AlibabaIdleTradeGiveUpRecoverDepositIsvGiveUpDepositParam{
        return $this->isvGiveUpDepositParam;
    }

    public function setIsvGiveUpDepositParam(AlibabaIdleTradeGiveUpRecoverDepositIsvGiveUpDepositParam $isvGiveUpDepositParam){
        $this->isvGiveUpDepositParam = $isvGiveUpDepositParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.trade.give.up.recover.deposit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->isvGiveUpDepositParam)) {
            $requestParam["isv_give_up_deposit_param"] = TopUtil::convertStruct($this->isvGiveUpDepositParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


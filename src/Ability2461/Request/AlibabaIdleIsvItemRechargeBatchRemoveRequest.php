<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemRechargeBatchRemoveIdleItemAutoRechargeBatchRemoveApiDO;

class AlibabaIdleIsvItemRechargeBatchRemoveRequest {

    /**
        请求参数
     **/
    private $idleItemAutoRechargeBatchRemoveApiDo;


    public function getIdleItemAutoRechargeBatchRemoveApiDo() : AlibabaIdleIsvItemRechargeBatchRemoveIdleItemAutoRechargeBatchRemoveApiDO{
        return $this->idleItemAutoRechargeBatchRemoveApiDo;
    }

    public function setIdleItemAutoRechargeBatchRemoveApiDo(AlibabaIdleIsvItemRechargeBatchRemoveIdleItemAutoRechargeBatchRemoveApiDO $idleItemAutoRechargeBatchRemoveApiDo){
        $this->idleItemAutoRechargeBatchRemoveApiDo = $idleItemAutoRechargeBatchRemoveApiDo;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.recharge.batch.remove";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleItemAutoRechargeBatchRemoveApiDo)) {
            $requestParam["idle_item_auto_recharge_batch_remove_api_do"] = TopUtil::convertStruct($this->idleItemAutoRechargeBatchRemoveApiDo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemPublishIdleItemApiDo;

class AlibabaIdleIsvItemPublishRequest {

    /**
        商品数据参数
     **/
    private $itemParam;


    public function getItemParam() : AlibabaIdleIsvItemPublishIdleItemApiDo{
        return $this->itemParam;
    }

    public function setItemParam(AlibabaIdleIsvItemPublishIdleItemApiDo $itemParam){
        $this->itemParam = $itemParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.publish";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemParam)) {
            $requestParam["item_param"] = TopUtil::convertStruct($this->itemParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemEditIdleItemApiDo;

class AlibabaIdleIsvItemEditRequest {

    /**
        商品数据参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvItemEditIdleItemApiDo{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvItemEditIdleItemApiDo $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.edit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


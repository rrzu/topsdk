<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleOpenIsvGoosefishLiveInfoQueryIdleOpenIsvLiveParam;

class AlibabaIdleOpenIsvGoosefishLiveInfoQueryRequest {

    /**
        查询直播信息请求入参
     **/
    private $idleOpenIsvLiveParam;


    public function getIdleOpenIsvLiveParam() : AlibabaIdleOpenIsvGoosefishLiveInfoQueryIdleOpenIsvLiveParam{
        return $this->idleOpenIsvLiveParam;
    }

    public function setIdleOpenIsvLiveParam(AlibabaIdleOpenIsvGoosefishLiveInfoQueryIdleOpenIsvLiveParam $idleOpenIsvLiveParam){
        $this->idleOpenIsvLiveParam = $idleOpenIsvLiveParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.open.isv.goosefish.live.info.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleOpenIsvLiveParam)) {
            $requestParam["idle_open_isv_live_param"] = TopUtil::convertStruct($this->idleOpenIsvLiveParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


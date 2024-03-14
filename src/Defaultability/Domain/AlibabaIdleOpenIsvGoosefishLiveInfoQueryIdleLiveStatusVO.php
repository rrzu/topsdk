<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleOpenIsvGoosefishLiveInfoQueryIdleLiveStatusVO {

    /**
        是否开播
     **/
    public $living_on;

    /**
        直播间ID
     **/
    public $live_id;

    /**
        地址
     **/
    public $url;


    public function getLivingOn() : bool{
        return $this->living_on;
    }

    public function setLivingOn(bool $livingOn){
        $this->living_on = $livingOn;
    }

    public function getLiveId() : int{
        return $this->live_id;
    }

    public function setLiveId(int $liveId){
        $this->live_id = $liveId;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}


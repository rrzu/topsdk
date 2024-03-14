<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleUserPermitUserGrantRequest {

    /**
        当前用户的所属业务类型编码，优品&开放平台业务 默认使用 IDLE_TOP
     **/
    public $biz_code;

    /**
        场景码，标识品类。22:虚拟卡券/账号
     **/
    public $scene_type;


    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }

    public function getSceneType() : string{
        return $this->scene_type;
    }

    public function setSceneType(string $sceneType){
        $this->scene_type = $sceneType;
    }


}


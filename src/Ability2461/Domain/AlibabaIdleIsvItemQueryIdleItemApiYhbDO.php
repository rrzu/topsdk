<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiYhbDO {

    /**
        是否开启验货宝
     **/
    public $use_yhb_service;

    /**
        验货宝相关配置
     **/
    public $settings_preferences;


    public function getUseYhbService() : bool{
        return $this->use_yhb_service;
    }

    public function setUseYhbService(bool $useYhbService){
        $this->use_yhb_service = $useYhbService;
    }

    public function getSettingsPreferences() : array{
        return $this->settings_preferences;
    }

    public function setSettingsPreferences(array $settingsPreferences){
        $this->settings_preferences = $settingsPreferences;
    }


}


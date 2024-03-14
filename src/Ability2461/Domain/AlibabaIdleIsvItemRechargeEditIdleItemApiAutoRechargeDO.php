<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemRechargeEditIdleItemApiAutoRechargeDO {

    /**
        add：增加；remove：移除。
     **/
    public $action;

    /**
        直充附加信息
     **/
    public $template_extra_info;

    /**
        直充模板标识
     **/
    public $template_code;


    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
    }

    public function getTemplateExtraInfo() : string{
        return $this->template_extra_info;
    }

    public function setTemplateExtraInfo(string $templateExtraInfo){
        $this->template_extra_info = $templateExtraInfo;
    }

    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
    }


}


<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiAutoRechargeDO {

    /**
        直充模板code
     **/
    public $template_code;

    /**
        模版的额外参数
     **/
    public $template_extra_info;

    /**
        直充动作，add:添加，remove:移除
     **/
    public $action;


    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
    }

    public function getTemplateExtraInfo() : string{
        return $this->template_extra_info;
    }

    public function setTemplateExtraInfo(string $templateExtraInfo){
        $this->template_extra_info = $templateExtraInfo;
    }

    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
    }


}


<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleItemUserPublishitemsIdleItemApiAutoRechargeDO {

    /**
        直充模板code
     **/
    public $template_code;

    /**
        模版的额外参数
     **/
    public $template_extra_info;

    /**
        当前服务商是否拥有直充编辑权限
     **/
    public $owner;


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

    public function getOwner() : bool{
        return $this->owner;
    }

    public function setOwner(bool $owner){
        $this->owner = $owner;
    }


}


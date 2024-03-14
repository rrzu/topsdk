<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserAuthorizeAddUserAuthorizationCmd {

    /**
        需要为用户添加的权限类型，具体类型可以参考api描述的语雀文档
     **/
    public $auth_type;


    public function getAuthType() : string{
        return $this->auth_type;
    }

    public function setAuthType(string $authType){
        $this->auth_type = $authType;
    }


}


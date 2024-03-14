<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserQueryIdleUserApiDo {

    /**
        卖家的snsNick（已经废弃，不再返回数据）
     **/
    public $user_nick;

    /**
        用户身份（GENERAL: 普通用户，PRO_PLAYER: 个人经营者）
     **/
    public $identity;

    /**
        具备准入权限的业务类型列表
     **/
    public $support_biz_types;

    /**
        加密的卖家userId
     **/
    public $encryption_seller_id;

    /**
        具备准入权限的行业品类列表
     **/
    public $support_cat_types;

    /**
        是否是账号独立升级用户，是否有闲鱼独立账号升级标
     **/
    public $has_uptag;


    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getIdentity() : string{
        return $this->identity;
    }

    public function setIdentity(string $identity){
        $this->identity = $identity;
    }

    public function getSupportBizTypes() : array{
        return $this->support_biz_types;
    }

    public function setSupportBizTypes(array $supportBizTypes){
        $this->support_biz_types = $supportBizTypes;
    }

    public function getEncryptionSellerId() : string{
        return $this->encryption_seller_id;
    }

    public function setEncryptionSellerId(string $encryptionSellerId){
        $this->encryption_seller_id = $encryptionSellerId;
    }

    public function getSupportCatTypes() : array{
        return $this->support_cat_types;
    }

    public function setSupportCatTypes(array $supportCatTypes){
        $this->support_cat_types = $supportCatTypes;
    }

    public function getHasUptag() : bool{
        return $this->has_uptag;
    }

    public function setHasUptag(bool $hasUptag){
        $this->has_uptag = $hasUptag;
    }


}


<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvServicerateBizqueryIdleRateDataTopVO {

    /**
        评价id
     **/
    public $id;

    /**
        评价主体id：比如订单id
     **/
    public $bizid;

    /**
        被评价对象id：比如服务商id标识，买/卖家id等
     **/
    public $rated_id;

    /**
        评价人id
     **/
    public $rater_id;

    /**
        业务类型：1: 验货宝，2: 回收，3：入仓帮卖，4：二手车寄卖，5: 非入仓帮卖
     **/
    public $biz_type;

    /**
        子业务类型: 1: 默认（预留字段，目前都是1）
     **/
    public $sub_biz_type;

    /**
        类目，各业务自定义
     **/
    public $category;

    /**
        场景，各业务自定义
     **/
    public $scene;

    /**
        评价类型：1: 主评，2: 追评， 3: 回复
     **/
    public $rate_type;

    /**
        评价状态：1: 待评价，2: 已发表
     **/
    public $rate_status;

    /**
        数据有效状态：1:有效，2: 安全处罚，3 系统删除，4 用户删除
     **/
    public $status;

    /**
        评价内容
     **/
    public $content;

    /**
        评价分数： 2.0 差评，5.0 中评，8.0 好评
     **/
    public $score;

    /**
        邀评时间，时间戳，毫秒
     **/
    public $invite_time;

    /**
        评价时间，时间戳，毫秒
     **/
    public $rate_time;

    /**
        评价问卷信息
     **/
    public $uone_data;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getBizid() : string{
        return $this->bizid;
    }

    public function setBizid(string $bizid){
        $this->bizid = $bizid;
    }

    public function getRatedId() : string{
        return $this->rated_id;
    }

    public function setRatedId(string $ratedId){
        $this->rated_id = $ratedId;
    }

    public function getRaterId() : string{
        return $this->rater_id;
    }

    public function setRaterId(string $raterId){
        $this->rater_id = $raterId;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getSubBizType() : int{
        return $this->sub_biz_type;
    }

    public function setSubBizType(int $subBizType){
        $this->sub_biz_type = $subBizType;
    }

    public function getCategory() : string{
        return $this->category;
    }

    public function setCategory(string $category){
        $this->category = $category;
    }

    public function getScene() : string{
        return $this->scene;
    }

    public function setScene(string $scene){
        $this->scene = $scene;
    }

    public function getRateType() : int{
        return $this->rate_type;
    }

    public function setRateType(int $rateType){
        $this->rate_type = $rateType;
    }

    public function getRateStatus() : int{
        return $this->rate_status;
    }

    public function setRateStatus(int $rateStatus){
        $this->rate_status = $rateStatus;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getScore() : string{
        return $this->score;
    }

    public function setScore(string $score){
        $this->score = $score;
    }

    public function getInviteTime() : int{
        return $this->invite_time;
    }

    public function setInviteTime(int $inviteTime){
        $this->invite_time = $inviteTime;
    }

    public function getRateTime() : int{
        return $this->rate_time;
    }

    public function setRateTime(int $rateTime){
        $this->rate_time = $rateTime;
    }

    public function getUoneData() : string{
        return $this->uone_data;
    }

    public function setUoneData(string $uoneData){
        $this->uone_data = $uoneData;
    }


}


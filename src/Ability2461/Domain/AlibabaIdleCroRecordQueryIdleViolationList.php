<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCroRecordQueryIdleViolationList {

    /**
        处罚原因
     **/
    public $reason;

    /**
        source
     **/
    public $source;

    /**
        isAppealFront
     **/
    public $is_appeal_front;

    /**
        处罚名称
     **/
    public $title;

    /**
        处罚平台
     **/
    public $platform;

    /**
        违规扣分
     **/
    public $point;

    /**
        ruleCode
     **/
    public $rule_code;

    /**
        处罚结果
     **/
    public $punish_result;

    /**
        处罚时间
     **/
    public $punish_time;

    /**
        节点处罚
     **/
    public $point_punish;

    /**
        处罚结束时间
     **/
    public $punish_end_time;

    /**
        规则名称
     **/
    public $rule_name;

    /**
        id
     **/
    public $id;

    /**
        status
     **/
    public $status;


    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getSource() : string{
        return $this->source;
    }

    public function setSource(string $source){
        $this->source = $source;
    }

    public function getIsAppealFront() : int{
        return $this->is_appeal_front;
    }

    public function setIsAppealFront(int $isAppealFront){
        $this->is_appeal_front = $isAppealFront;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPlatform() : string{
        return $this->platform;
    }

    public function setPlatform(string $platform){
        $this->platform = $platform;
    }

    public function getPoint() : int{
        return $this->point;
    }

    public function setPoint(int $point){
        $this->point = $point;
    }

    public function getRuleCode() : string{
        return $this->rule_code;
    }

    public function setRuleCode(string $ruleCode){
        $this->rule_code = $ruleCode;
    }

    public function getPunishResult() : string{
        return $this->punish_result;
    }

    public function setPunishResult(string $punishResult){
        $this->punish_result = $punishResult;
    }

    public function getPunishTime() : int{
        return $this->punish_time;
    }

    public function setPunishTime(int $punishTime){
        $this->punish_time = $punishTime;
    }

    public function getPointPunish() : int{
        return $this->point_punish;
    }

    public function setPointPunish(int $pointPunish){
        $this->point_punish = $pointPunish;
    }

    public function getPunishEndTime() : int{
        return $this->punish_end_time;
    }

    public function setPunishEndTime(int $punishEndTime){
        $this->punish_end_time = $punishEndTime;
    }

    public function getRuleName() : string{
        return $this->rule_name;
    }

    public function setRuleName(string $ruleName){
        $this->rule_name = $ruleName;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}


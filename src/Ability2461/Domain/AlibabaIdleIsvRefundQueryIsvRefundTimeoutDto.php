<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvRefundQueryIsvRefundTimeoutDto {

    /**
        退款超时创建时间，时间戳，毫秒
     **/
    public $create;

    /**
        退款超时修改时间，时间戳，毫秒
     **/
    public $modified;

    /**
        退款超时时长，时间长度(毫秒)
     **/
    public $duration;

    /**
        退款超时时间点(自动触发状态变更的超时时间点)，时间戳，毫秒
     **/
    public $timeout;

    /**
        退款超时运行状态 0:超时创建完成, 1:超时运行中, 2:超时暂停, 3:超时关闭, 4:超时失败, 5:超时成功
     **/
    public $timeout_status;

    /**
        退款超时动作类型
     **/
    public $timeout_action_type;


    public function getCreate() : int{
        return $this->create;
    }

    public function setCreate(int $create){
        $this->create = $create;
    }

    public function getModified() : int{
        return $this->modified;
    }

    public function setModified(int $modified){
        $this->modified = $modified;
    }

    public function getDuration() : int{
        return $this->duration;
    }

    public function setDuration(int $duration){
        $this->duration = $duration;
    }

    public function getTimeout() : int{
        return $this->timeout;
    }

    public function setTimeout(int $timeout){
        $this->timeout = $timeout;
    }

    public function getTimeoutStatus() : int{
        return $this->timeout_status;
    }

    public function setTimeoutStatus(int $timeoutStatus){
        $this->timeout_status = $timeoutStatus;
    }

    public function getTimeoutActionType() : string{
        return $this->timeout_action_type;
    }

    public function setTimeoutActionType(string $timeoutActionType){
        $this->timeout_action_type = $timeoutActionType;
    }


}


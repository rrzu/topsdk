<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiStoreGroupDO {

    /**
        门店库Id
     **/
    public $group_id;

    /**
        门店库名称
     **/
    public $group_name;


    public function getGroupId() : int{
        return $this->group_id;
    }

    public function setGroupId(int $groupId){
        $this->group_id = $groupId;
    }

    public function getGroupName() : string{
        return $this->group_name;
    }

    public function setGroupName(string $groupName){
        $this->group_name = $groupName;
    }


}


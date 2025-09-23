<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopReturnDTO {

    /**
        门店库名称
     **/
    public $group_name;

    /**
        门店库简称
     **/
    public $group_short_name;

    /**
        id
     **/
    public $group_id;


    public function getGroupName() : string{
        return $this->group_name;
    }

    public function setGroupName(string $groupName){
        $this->group_name = $groupName;
    }

    public function getGroupShortName() : string{
        return $this->group_short_name;
    }

    public function setGroupShortName(string $groupShortName){
        $this->group_short_name = $groupShortName;
    }

    public function getGroupId() : int{
        return $this->group_id;
    }

    public function setGroupId(int $groupId){
        $this->group_id = $groupId;
    }


}


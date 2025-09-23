<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemTrendyChouShangDO {

    /**
        是否为抽赏商品
     **/
    public $chou_shang_item;

    /**
        赏箱ID
     **/
    public $group_box_id;

    /**
        是否为抽赏邮费商品
     **/
    public $chou_shang_post_item;


    public function getChouShangItem() : bool{
        return $this->chou_shang_item;
    }

    public function setChouShangItem(bool $chouShangItem){
        $this->chou_shang_item = $chouShangItem;
    }

    public function getGroupBoxId() : string{
        return $this->group_box_id;
    }

    public function setGroupBoxId(string $groupBoxId){
        $this->group_box_id = $groupBoxId;
    }

    public function getChouShangPostItem() : bool{
        return $this->chou_shang_post_item;
    }

    public function setChouShangPostItem(bool $chouShangPostItem){
        $this->chou_shang_post_item = $chouShangPostItem;
    }


}


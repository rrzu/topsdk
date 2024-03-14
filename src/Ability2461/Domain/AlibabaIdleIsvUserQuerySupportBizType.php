<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserQuerySupportBizType {

    /**
        0 已验货-不入仓，1 已验货-入仓，3 寄卖，4 品牌免检，5  官方自营，7 品牌直营，8 专业认证，9  信誉担保
     **/
    public $item_biz_type;


    public function getItemBizType() : int{
        return $this->item_biz_type;
    }

    public function setItemBizType(int $itemBizType){
        $this->item_biz_type = $itemBizType;
    }


}


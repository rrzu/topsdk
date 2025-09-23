<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionListCoinDeductionListDTO {

    /**
        商品信息
     **/
    public $card_list;

    /**
        是否下一页
     **/
    public $next_page;

    /**
        总数
     **/
    public $total_count;


    public function getCardList() : array{
        return $this->card_list;
    }

    public function setCardList(array $cardList){
        $this->card_list = $cardList;
    }

    public function getNextPage() : bool{
        return $this->next_page;
    }

    public function setNextPage(bool $nextPage){
        $this->next_page = $nextPage;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}


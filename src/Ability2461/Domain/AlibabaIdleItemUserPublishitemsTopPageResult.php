<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleItemUserPublishitemsTopPageResult {

    /**
        商品列表
     **/
    public $item_list;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误描述
     **/
    public $err_msg;

    /**
        是否有下一页
     **/
    public $next_page;

    /**
        是否成功
     **/
    public $success;

    /**
        总结果数
     **/
    public $total;


    public function getItemList() : array{
        return $this->item_list;
    }

    public function setItemList(array $itemList){
        $this->item_list = $itemList;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getNextPage() : bool{
        return $this->next_page;
    }

    public function setNextPage(bool $nextPage){
        $this->next_page = $nextPage;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }


}


<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditItemLeaseDO {

    /**
        租赁押金, 单位分
     **/
    public $rental_deposit_price_in_cent;

    /**
        是否支持免押金
     **/
    public $support_deposit_free;

    /**
        免押金协议id列表
     **/
    public $deposit_free_agreement_ids;

    /**
        套餐列表 不能超过365天,套餐列表不能超过10个
     **/
    public $item_rental_packages;

    /**
        最早起租日，如T日下单，最早起租日为T+3日，则传参数为3，若不传，则用户可下单任意日期
     **/
    public $earliest_lease_days;

    /**
        套餐外租金
     **/
    public $price_cent;


    public function getRentalDepositPriceInCent() : int{
        return $this->rental_deposit_price_in_cent;
    }

    public function setRentalDepositPriceInCent(int $rentalDepositPriceInCent){
        $this->rental_deposit_price_in_cent = $rentalDepositPriceInCent;
    }

    public function getSupportDepositFree() : bool{
        return $this->support_deposit_free;
    }

    public function setSupportDepositFree(bool $supportDepositFree){
        $this->support_deposit_free = $supportDepositFree;
    }

    public function getDepositFreeAgreementIds() : array{
        return $this->deposit_free_agreement_ids;
    }

    public function setDepositFreeAgreementIds(array $depositFreeAgreementIds){
        $this->deposit_free_agreement_ids = $depositFreeAgreementIds;
    }

    public function getItemRentalPackages() : array{
        return $this->item_rental_packages;
    }

    public function setItemRentalPackages(array $itemRentalPackages){
        $this->item_rental_packages = $itemRentalPackages;
    }

    public function getEarliestLeaseDays() : int{
        return $this->earliest_lease_days;
    }

    public function setEarliestLeaseDays(int $earliestLeaseDays){
        $this->earliest_lease_days = $earliestLeaseDays;
    }

    public function getPriceCent() : int{
        return $this->price_cent;
    }

    public function setPriceCent(int $priceCent){
        $this->price_cent = $priceCent;
    }


}


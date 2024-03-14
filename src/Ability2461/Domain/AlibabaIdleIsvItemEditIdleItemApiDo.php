<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiDo {

    /**
        商品描述(长度<=5000)
     **/
    public $desc;

    /**
        商品Id（根据此数据进行相应商品更新）
     **/
    public $item_id;

    /**
        商品原价, 单位：元(最大99999999)
     **/
    public $original_price;

    /**
        商品售价, 单位：元(最大99999999)
     **/
    public $reserve_price;

    /**
        商品标题(长度<=30)
     **/
    public $title;

    /**
        邮费, 单位：元(最大99999999)
     **/
    public $transport_fee;

    /**
        属性的键值对信息，包括品牌、型号、内存大小（手机）等，(不传入则不修改)
     **/
    public $pv_list;

    /**
        sku列表(不传入则不修改)
     **/
    public $item_sku_list;

    /**
        图书业务数据(不传入则不修改)
     **/
    public $book_data;

    /**
        商品图片列表，使用图片上传接口返回的文件Id，支持多张(最多9张)
     **/
    public $images;

    /**
        商品新旧程度, 值为0-100的整数，例如100代表全新，95代表95新；特殊场景会影响优品标
     **/
    public $stuff_status;

    /**
        行政区划Id，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(6位)
     **/
    public $division_id;

    /**
        纬度
     **/
    public $latitude;

    /**
        经度
     **/
    public $longitude;

    /**
        已验货业务数据(不传入则不修改)
     **/
    public $inspected_data;

    /**
        宝贝库存数量
     **/
    public $quantity;

    /**
        外部商品编码
     **/
    public $outer_id;

    /**
        淘宝卖家后台的运费模板id
     **/
    public $template_id;

    /**
        拍卖业务数据(不传入则不修改)
     **/
    public $bid_data;

    /**
        商品类型： b 一口价；a 拍卖
     **/
    public $auction_type;

    /**
        商品白底图列表(目前暂时只支持一张)
     **/
    public $white_bg_imgs;

    /**
        [已废弃]商品服务标签，用逗号分隔 || 1：100%验货；2：正品鉴别；3：七天包退；4：一年质保；5：48小时发货；7：质量问题包退；8：一物一证
     **/
    public $sp_guarantee;

    /**
        商品类目Id,手机: 50025386（long型，一般8～10位）
     **/
    public $category_id;

    /**
        渠道类目id
     **/
    public $channel_cat_id;

    /**
        卖家服务信息
     **/
    public $after_sales_data;

    /**
        直充相关信息
     **/
    public $idle_item_api_auto_recharge_do;

    /**
        验货宝信息
     **/
    public $idle_item_yhb_do;

    /**
        特卖商品相关信息
     **/
    public $flash_sale_do;


    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getOriginalPrice() : string{
        return $this->original_price;
    }

    public function setOriginalPrice(string $originalPrice){
        $this->original_price = $originalPrice;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTransportFee() : string{
        return $this->transport_fee;
    }

    public function setTransportFee(string $transportFee){
        $this->transport_fee = $transportFee;
    }

    public function getPvList() : array{
        return $this->pv_list;
    }

    public function setPvList(array $pvList){
        $this->pv_list = $pvList;
    }

    public function getItemSkuList() : array{
        return $this->item_sku_list;
    }

    public function setItemSkuList(array $itemSkuList){
        $this->item_sku_list = $itemSkuList;
    }

    public function getBookData() : AlibabaIdleIsvItemEditIdleItemApiBookDo{
        return $this->book_data;
    }

    public function setBookData(AlibabaIdleIsvItemEditIdleItemApiBookDo $bookData){
        $this->book_data = $bookData;
    }

    public function getImages() : array{
        return $this->images;
    }

    public function setImages(array $images){
        $this->images = $images;
    }

    public function getStuffStatus() : int{
        return $this->stuff_status;
    }

    public function setStuffStatus(int $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getInspectedData() : AlibabaIdleIsvItemEditIdleItemApiInspectedDo{
        return $this->inspected_data;
    }

    public function setInspectedData(AlibabaIdleIsvItemEditIdleItemApiInspectedDo $inspectedData){
        $this->inspected_data = $inspectedData;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getBidData() : AlibabaIdleIsvItemEditIdleItemApiBidDo{
        return $this->bid_data;
    }

    public function setBidData(AlibabaIdleIsvItemEditIdleItemApiBidDo $bidData){
        $this->bid_data = $bidData;
    }

    public function getAuctionType() : string{
        return $this->auction_type;
    }

    public function setAuctionType(string $auctionType){
        $this->auction_type = $auctionType;
    }

    public function getWhiteBgImgs() : array{
        return $this->white_bg_imgs;
    }

    public function setWhiteBgImgs(array $whiteBgImgs){
        $this->white_bg_imgs = $whiteBgImgs;
    }

    public function getSpGuarantee() : string{
        return $this->sp_guarantee;
    }

    public function setSpGuarantee(string $spGuarantee){
        $this->sp_guarantee = $spGuarantee;
    }

    public function getCategoryId() : string{
        return $this->category_id;
    }

    public function setCategoryId(string $categoryId){
        $this->category_id = $categoryId;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getAfterSalesData() : AlibabaIdleIsvItemEditIdleItemApiAfterSalesDo{
        return $this->after_sales_data;
    }

    public function setAfterSalesData(AlibabaIdleIsvItemEditIdleItemApiAfterSalesDo $afterSalesData){
        $this->after_sales_data = $afterSalesData;
    }

    public function getIdleItemApiAutoRechargeDo() : AlibabaIdleIsvItemEditIdleItemApiAutoRechargeDO{
        return $this->idle_item_api_auto_recharge_do;
    }

    public function setIdleItemApiAutoRechargeDo(AlibabaIdleIsvItemEditIdleItemApiAutoRechargeDO $idleItemApiAutoRechargeDo){
        $this->idle_item_api_auto_recharge_do = $idleItemApiAutoRechargeDo;
    }

    public function getIdleItemYhbDo() : AlibabaIdleIsvItemEditIdleItemApiYhbDO{
        return $this->idle_item_yhb_do;
    }

    public function setIdleItemYhbDo(AlibabaIdleIsvItemEditIdleItemApiYhbDO $idleItemYhbDo){
        $this->idle_item_yhb_do = $idleItemYhbDo;
    }

    public function getFlashSaleDo() : AlibabaIdleIsvItemEditIdleItemApiFlashSaleDO{
        return $this->flash_sale_do;
    }

    public function setFlashSaleDo(AlibabaIdleIsvItemEditIdleItemApiFlashSaleDO $flashSaleDo){
        $this->flash_sale_do = $flashSaleDo;
    }


}


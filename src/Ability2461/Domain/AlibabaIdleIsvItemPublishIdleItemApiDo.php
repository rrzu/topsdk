<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiDo {

    /**
        [已废弃]验货报告, 此字段后续会废弃；如需使用参见: inspected_data.inspect_report
     **/
    public $inspect_report;

    /**
        商品图片列表，使用图片上传接口返回的文件Id，支持多张(最多9张)
     **/
    public $images;

    /**
        商品售价, 单位：元(最大99999999)
     **/
    public $reserve_price;

    /**
        邮费, 单位：元(最大99999999)
     **/
    public $transport_fee;

    /**
        商品原价, 单位：元(最大99999999)
     **/
    public $original_price;

    /**
        商品标题(长度<=30)
     **/
    public $title;

    /**
        商品新旧程度, 值为0-100的整数，例如100代表全新，95代表95新
     **/
    public $stuff_status;

    /**
        服务业务分类，已验货业务场景下（手机:1, 潮品:2, 家电:3, 乐器:8, 3C数码:9, 奢品:16, 母婴:17, 美妆:18, 文玩/珠宝:19, 潮玩:20, 家居:21）
     **/
    public $sp_biz_type;

    /**
        行政区划Id，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(long型，6位)
     **/
    public $division_id;

    /**
        商品类目Id,手机: 50025386（long型，一般8～10位）
     **/
    public $category_id;

    /**
        交易方式, 仅在线交易: 0,仅线下交易: 1,线上OR线下交易: 2（int型，1位）
     **/
    public $trade_type;

    /**
        商品描述(长度<=5000)
     **/
    public $desc;

    /**
        纬度
     **/
    public $latitude;

    /**
        经度
     **/
    public $longitude;

    /**
        商品业务类型 0 已验货不入仓，1 已验货入仓，2 普通商品
     **/
    public $item_biz_type;

    /**
        [已废弃]已验货入仓城市(此字段后续会废弃；如需使用参见: inspected_data.ware_house_city)
     **/
    public $ware_house_city;

    /**
        [已废弃]已验货入仓时间(此字段后续会废弃；如需使用参见: inspected_data.ware_house_time)
     **/
    public $ware_house_time;

    /**
        渠道类目id，必填，不可修改
     **/
    public $channel_cat_id;

    /**
        属性的键值对信息，包括品牌、型号、内存大小（手机）等
     **/
    public $pv_list;

    /**
        sku列表
     **/
    public $item_sku_list;

    /**
        已验货业务数据(不可修改)
     **/
    public $inspected_data;

    /**
        图书业务数据
     **/
    public $book_data;

    /**
        宝贝库存数量设置
     **/
    public $quantity;

    /**
        淘宝卖家后台的运费模板id
     **/
    public $template_id;

    /**
        外部商家标识(商品编码等)(长度<=30)
     **/
    public $outer_id;

    /**
        宝贝拍卖信息
     **/
    public $bid_data;

    /**
        商品类型，a: 拍卖， b：一口价(普通商品)
     **/
    public $auction_type;

    /**
        商品白底图列表(目前暂时只支持一张)，使用图片上传接口返回的文件Id
     **/
    public $white_bg_imgs;

    /**
        [已废弃]商品服务标签，用逗号分隔 || 1：100%验货；2：正品鉴别；3：七天包退；4：一年质保；5：48小时发货；7：质量问题包退；8：一物一证
     **/
    public $sp_guarantee;

    /**
        卖家服务信息
     **/
    public $after_sales_data;

    /**
        真车认证相关信息
     **/
    public $real_car_verify_data;

    /**
        验货宝信息
     **/
    public $idle_item_yhb_do;

    /**
        帮卖信息
     **/
    public $biz_help_data;

    /**
        特卖商品相关信息
     **/
    public $flash_sale_do;


    public function getInspectReport() : string{
        return $this->inspect_report;
    }

    public function setInspectReport(string $inspectReport){
        $this->inspect_report = $inspectReport;
    }

    public function getImages() : array{
        return $this->images;
    }

    public function setImages(array $images){
        $this->images = $images;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getTransportFee() : string{
        return $this->transport_fee;
    }

    public function setTransportFee(string $transportFee){
        $this->transport_fee = $transportFee;
    }

    public function getOriginalPrice() : string{
        return $this->original_price;
    }

    public function setOriginalPrice(string $originalPrice){
        $this->original_price = $originalPrice;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getStuffStatus() : int{
        return $this->stuff_status;
    }

    public function setStuffStatus(int $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getSpBizType() : string{
        return $this->sp_biz_type;
    }

    public function setSpBizType(string $spBizType){
        $this->sp_biz_type = $spBizType;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getTradeType() : int{
        return $this->trade_type;
    }

    public function setTradeType(int $tradeType){
        $this->trade_type = $tradeType;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
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

    public function getItemBizType() : int{
        return $this->item_biz_type;
    }

    public function setItemBizType(int $itemBizType){
        $this->item_biz_type = $itemBizType;
    }

    public function getWareHouseCity() : string{
        return $this->ware_house_city;
    }

    public function setWareHouseCity(string $wareHouseCity){
        $this->ware_house_city = $wareHouseCity;
    }

    public function getWareHouseTime() : int{
        return $this->ware_house_time;
    }

    public function setWareHouseTime(int $wareHouseTime){
        $this->ware_house_time = $wareHouseTime;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
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

    public function getInspectedData() : AlibabaIdleIsvItemPublishIdleItemApiInspectedDo{
        return $this->inspected_data;
    }

    public function setInspectedData(AlibabaIdleIsvItemPublishIdleItemApiInspectedDo $inspectedData){
        $this->inspected_data = $inspectedData;
    }

    public function getBookData() : AlibabaIdleIsvItemPublishIdleItemApiBookDo{
        return $this->book_data;
    }

    public function setBookData(AlibabaIdleIsvItemPublishIdleItemApiBookDo $bookData){
        $this->book_data = $bookData;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getBidData() : AlibabaIdleIsvItemPublishIdleItemApiBidDo{
        return $this->bid_data;
    }

    public function setBidData(AlibabaIdleIsvItemPublishIdleItemApiBidDo $bidData){
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

    public function getAfterSalesData() : AlibabaIdleIsvItemPublishIdleItemApiAfterSalesDo{
        return $this->after_sales_data;
    }

    public function setAfterSalesData(AlibabaIdleIsvItemPublishIdleItemApiAfterSalesDo $afterSalesData){
        $this->after_sales_data = $afterSalesData;
    }

    public function getRealCarVerifyData() : AlibabaIdleIsvItemPublishIdleItemRealCarVerifyDO{
        return $this->real_car_verify_data;
    }

    public function setRealCarVerifyData(AlibabaIdleIsvItemPublishIdleItemRealCarVerifyDO $realCarVerifyData){
        $this->real_car_verify_data = $realCarVerifyData;
    }

    public function getIdleItemYhbDo() : AlibabaIdleIsvItemPublishIdleItemApiYhbDO{
        return $this->idle_item_yhb_do;
    }

    public function setIdleItemYhbDo(AlibabaIdleIsvItemPublishIdleItemApiYhbDO $idleItemYhbDo){
        $this->idle_item_yhb_do = $idleItemYhbDo;
    }

    public function getBizHelpData() : AlibabaIdleIsvItemPublishIdleItemApiBizHelpDataDO{
        return $this->biz_help_data;
    }

    public function setBizHelpData(AlibabaIdleIsvItemPublishIdleItemApiBizHelpDataDO $bizHelpData){
        $this->biz_help_data = $bizHelpData;
    }

    public function getFlashSaleDo() : AlibabaIdleIsvItemPublishIdleItemApiFlashSaleDO{
        return $this->flash_sale_do;
    }

    public function setFlashSaleDo(AlibabaIdleIsvItemPublishIdleItemApiFlashSaleDO $flashSaleDo){
        $this->flash_sale_do = $flashSaleDo;
    }


}


<?php

namespace LeagueAndShop\EasyTBK\SuNing\Request\Netalliance;

use LeagueAndShop\EasyTBK\SuNing\SuningRequest;

class CommodityimagesQueryRequest  extends SuningRequest
{
    /**
     * 商品编码
     */
    private $commodityCode;

    /**
     *商家编码
     */
    private $supplierCode;

    public function getCommodityCode() {
        return $this->commodityCode;
    }

    public function setCommodityCode($commodityCode) {
        $this->commodityCode = $commodityCode;
        $this->apiParams["commodityCode"] = $commodityCode;
    }

    public function getSupplierCode() {
        return $this->supplierCode;
    }

    public function setSupplierCode($supplierCode) {
        $this->supplierCode = $supplierCode;
        $this->apiParams["supplierCode"] = $supplierCode;
    }
    public function getSuningService() {
        return $this->suningService;
    }

    public function setSuningService($suningService) {
        $this->suningService = $suningService;
        $this->apiParams["suningService"] = $suningService;
    }

    public function getApiMethodName(){
        return 'suning.netalliance.commodityimages.query';
    }

    public function getApiParams(){
        return $this->apiParams;
    }

    public function check(){
        //非空校验
    }

    public function getBizName(){
        return "queryCommodityimages";
    }
}
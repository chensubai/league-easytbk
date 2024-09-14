<?php

namespace LeagueAndShop\EasyTBK\SuNing\Request\Netalliance;

use LeagueAndShop\EasyTBK\SuNing\SuningRequest;

class SelectrecommendcommodityQueryRequest  extends SuningRequest
{
    /**
     *默认为1,,营销id。1-小编推荐；2-实时热销榜；3-当日热推榜；4-高佣爆款榜；5-团长招商榜；6-9块9专区
     */
    private $eliteId;

    /**
     *
     */
    private $cityCode;

    /**
     *
     */
    private $pageIndex;

    /**
     *
     */
    private $picHeight;

    /**
     *
     */
    private $picWidth;


    /**
     *
     */
    private $size;


    public function getEliteId() {
        return $this->eliteId;
    }

    public function setEliteId($eliteId) {
        $this->eliteId = $eliteId;
        $this->apiParams["eliteId"] = $eliteId;
    }

    public function getCityCode() {
        return $this->cityCode;
    }

    public function setCityCode($cityCode) {
        $this->cityCode = $cityCode;
        $this->apiParams["cityCode"] = $cityCode;
    }

    public function getPageIndex() {
        return $this->pageIndex;
    }

    public function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
        $this->apiParams["pageIndex"] = $pageIndex;
    }

    public function getPicHeight() {
        return $this->picHeight;
    }

    public function setPicHeight($picHeight) {
        $this->picHeight = $picHeight;
        $this->apiParams["picHeight"] = $picHeight;
    }

    public function getPicWidth() {
        return $this->picWidth;
    }
    public function setPicWidth($picWidth) {
        $this->picWidth = $picWidth;
        $this->apiParams["picWidth"] = $picWidth;
    }
    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
        $this->apiParams["size"] = $size;
    }
    public function getSuningService() {
        return $this->suningService;
    }

    public function setSuningService($suningService) {
        $this->suningService = $suningService;
        $this->apiParams["suningService"] = $suningService;
    }

    public function getApiMethodName(){
        return 'suning.netalliance.selectrecommendcommodity.query';
    }

    public function getApiParams(){
        return $this->apiParams;
    }

    public function check(){
        //非空校验
    }

    public function getBizName(){
        return "querySelectrecommendcommodity";
    }
}
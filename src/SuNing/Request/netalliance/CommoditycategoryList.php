<?php
namespace LeagueAndShop\EasyTBK\SuNing\Request\Netalliance;
class CommoditycategoryList {

    private $apiParams = array();

    private $grade;

    private $parentId;

    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
        $this->apiParams["grade"] = $grade;
    }

    public function getParentId() {
        return $this->parentId;
    }

    public function setParentId($parentId) {
        $this->parentId = $parentId;
        $this->apiParams["parentId"] = $parentId;
    }

    public function getApiParams(){
        return $this->apiParams;
    }

}

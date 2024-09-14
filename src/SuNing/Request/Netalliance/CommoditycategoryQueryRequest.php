<?php
namespace LeagueAndShop\EasyTBK\SuNing\Request\Netalliance;

use LeagueAndShop\EasyTBK\SuNing\SuningRequest;
use LeagueAndShop\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-8-1
 */
class CommoditycategoryQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $commoditycategoryList;

	public function getCommoditycategoryList() {
		return $this->commoditycategoryList;
	}

	public function setCommoditycategoryList($commoditycategoryList) {
		$this->commoditycategoryList = $commoditycategoryList;
		$arr = array();
		foreach ($commoditycategoryList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commoditycategoryList"] = $arr;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.commoditycategory.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "queryCommoditycategory";
	}

}
?>

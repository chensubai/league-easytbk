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
class UnionmemberConfirmRequest  extends SuningRequest{

	/**
	 *
	 */
	private $custNum;

	public function getCustNum() {
		return $this->custNum;
	}

	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.unionmember.confirm';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
	}

	public function getBizName(){
		return "confirmUnionmember";
	}

}

?>

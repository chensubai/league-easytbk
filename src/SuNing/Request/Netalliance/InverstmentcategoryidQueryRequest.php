<?php
namespace LeagueAndShop\EasyTBK\SuNing\Request\Netalliance;

use LeagueAndShop\EasyTBK\SuNing\SuningRequest;
use LeagueAndShop\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-11-6
 */
class InverstmentcategoryidQueryRequest  extends SuningRequest{

	public function getApiMethodName(){
		return 'suning.netalliance.inverstmentcategoryid.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "queryInverstmentcategoryid";
	}

}

?>

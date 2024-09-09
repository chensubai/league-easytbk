<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace LeagueAndShop\EasyTBK\Vip\Request;
interface UnionOrderServiceIf{


	public function healthCheck();

	public function orderList(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel);

	public function orderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel);

	public function refundOrderList(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request);

	public function refundOrderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request);

}

class _UnionOrderServiceClient extends \LeagueAndShop\EasyTBK\Vip\Osp\Base\OspStub implements \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderServiceIf{

	public function __construct(){

		parent::__construct("com.vip.adp.api.open.service.UnionOrderService", "1.0.0");
	}


	public function healthCheck(){

		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}

	public function send_healthCheck(){

		$this->initInvocation("healthCheck");
		$args = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_healthCheck_args();

		$this->send_base($args);
	}

	public function recv_healthCheck(){

		$result = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function orderList(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel){

		$this->send_orderList( $queryModel);
		return $this->recv_orderList();
	}

	public function send_orderList(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel){

		$this->initInvocation("orderList");
		$args = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_orderList_args();

		$args->queryModel = $queryModel;

		$this->send_base($args);
	}

	public function recv_orderList(){

		$result = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_orderList_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function orderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel){

		$this->send_orderListWithOauth( $queryModel);
		return $this->recv_orderListWithOauth();
	}

	public function send_orderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel $queryModel){

		$this->initInvocation("orderListWithOauth");
		$args = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_orderListWithOauth_args();

		$args->queryModel = $queryModel;

		$this->send_base($args);
	}

	public function recv_orderListWithOauth(){

		$result = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_orderListWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function refundOrderList(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request){

		$this->send_refundOrderList( $request);
		return $this->recv_refundOrderList();
	}

	public function send_refundOrderList(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request){

		$this->initInvocation("refundOrderList");
		$args = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_refundOrderList_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_refundOrderList(){

		$result = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_refundOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function refundOrderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request){

		$this->send_refundOrderListWithOauth( $request);
		return $this->recv_refundOrderListWithOauth();
	}

	public function send_refundOrderListWithOauth(\LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest $request){

		$this->initInvocation("refundOrderListWithOauth");
		$args = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_refundOrderListWithOauth_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_refundOrderListWithOauth(){

		$result = new \LeagueAndShop\EasyTBK\Vip\Request\UnionOrderService_refundOrderListWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


}




class UnionOrderService_healthCheck_args {

	static $_TSPEC;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(

			);

		}

		if (is_array($vals)){


		}

	}


	public function read($input){






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_orderList_args {

	static $_TSPEC;
	public $queryModel = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryModel'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['queryModel'])){

				$this->queryModel = $vals['queryModel'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->queryModel = new \LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel();
			$this->queryModel->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->queryModel !== null) {

			$xfer += $output->writeFieldBegin('queryModel');

			if (!is_object($this->queryModel)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->queryModel->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_orderListWithOauth_args {

	static $_TSPEC;
	public $queryModel = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryModel'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['queryModel'])){

				$this->queryModel = $vals['queryModel'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->queryModel = new \LeagueAndShop\EasyTBK\Vip\Request\OrderQueryModel();
			$this->queryModel->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->queryModel !== null) {

			$xfer += $output->writeFieldBegin('queryModel');

			if (!is_object($this->queryModel)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->queryModel->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_refundOrderList_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_refundOrderListWithOauth_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \LeagueAndShop\EasyTBK\Vip\Request\RefundOrderRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_healthCheck_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_orderList_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \LeagueAndShop\EasyTBK\Vip\Request\OrderResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_orderListWithOauth_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \LeagueAndShop\EasyTBK\Vip\Request\OrderResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_refundOrderList_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \LeagueAndShop\EasyTBK\Vip\Request\RefundOrderResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionOrderService_refundOrderListWithOauth_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \LeagueAndShop\EasyTBK\Vip\Request\RefundOrderResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \LeagueAndShop\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




?>

<?php
namespace Ycf\Service;
use Ycf\Core\YcfCore;

class YcfHello {

	public function actionIndex() {
		echo "hello ycf";

	}
	public function actionHello() {
		echo "hello ycf" . time();

	}

	public function actionTask() {
		// send a task to task worker.
		$param = array(
			'action' => 'test',
			'time' => time(),
		);
		//var_dump(HttpServer::getInstance()->http);
		//$this->http->task(json_encode($param));
		for ($i = 0; $i < 1000; $i++) {
			$taskId = YcfCore::$_http_server->task(json_encode($param));
		}
		echo $taskId . " hello ycf" . time();

	}

	public function actionLog() {
		YcfCore::$_log->log('hello ycf', 'info');
	}

}
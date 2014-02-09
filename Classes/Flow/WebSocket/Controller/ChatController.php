<?php
namespace Flow\WebSocket\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flow.WebSocket".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class ChatController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

}

?>
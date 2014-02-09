<?php
namespace Flow\WebSocket\Command;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flow.WebSocket".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Flow\WebSocket\Service\ListenerService;

/**
 * @Flow\Scope("singleton")
 */
class ListenerCommandController extends \TYPO3\Flow\Cli\CommandController {

	/**
	 * An example command
	 *
	 * The comment of this command method is also used for TYPO3 Flow's help screens. The first line should give a very short
	 * summary about what the command does. Then, after an empty line, you should explain in more detail what the command
	 * does. You might also give some usage example.
	 *
	 * It is important to document the parameters with param tags, because that information will also appear in the help
	 * screen.
	 *
	 * @param string $requiredArgument This argument is required
	 * @param string $optionalArgument This argument is optional
	 * @return void
	 */
	public function exampleCommand($requiredArgument, $optionalArgument = NULL) {
		$this->outputLine('You called the example command and passed "%s" as the first argument.', array($requiredArgument));
	}

}

?>
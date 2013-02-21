<?php
 /**
 * @version     0.0.9
 * @package     com_mpsflusher
 * @copyright   Copyleft (C) 2013 Appopulus Apps Pro Populus. All lefts reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by krlsBC - http://www.krls.es
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of HelloWorld component
 */
class MPSFlusherController extends JController
{
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) 
	{
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'Flusher'));

		// call parent behavior
		parent::display($cachable);
	}
}

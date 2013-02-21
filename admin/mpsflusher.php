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

// Set some global property
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-mpsflusher {background-image: url(components/com_mpsflusher/assets/images/l_mpsflusher.png);}');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by MPSFlusher
$controller = JController::getInstance('MPSFlusher');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

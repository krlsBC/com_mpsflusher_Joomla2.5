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

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * Flusher View
 */
class MPSFlusherViewFlusher extends JView
{
	/**
	 * Flusher view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
		JToolBarHelper::title(JText::_('COM_MPSFLUSHER_MANAGER'), 'mpsflusher');
		JToolBarHelper::preferences('com_mpsflusher');
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_MPSFLUSHER_ADMINISTRATION'));
	}
}

<?php
 /**
 * @version     0.0.9
 * @package     com_mpsflusher
 * @copyright   Copyleft (C) 2013 Appopulus Apps Pro Populus. All lefts reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by krlsBC - http://www.krls.es
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
// load tooltip behavior
JHtml::_('behavior.tooltip');
?>

<style>
div.box { border-style: dashed; border-width: 1px; ; padding:10px; margin:10px;}
div.white { background-color: #fff; color:#000; border-color: #9c9c9c}
div.black { background-color: #000; color:#fff; border-color: #fff}
</style>

<form action="<?php echo JRoute::_('index.php?option=com_mpsflusher'); ?>" method="post" name="adminForm">
			
	<!-- Flusher rutine -->
		<?php
			$componentParams = &JComponentHelper::getParams('com_mpsflusher');
			$param = $componentParams->get('path');
			$path = (strlen($param) > 0 ? $param : "/var/cache/mod_pagespeed/cache.flush");
			exec ( "touch ".$path );
			$command = "ls -ltr ".$path." | cut -c 30-78";
			$result = shell_exec( $command." 2>&1" );
		?>
	<!-- Flusher description -->
	<div class="width-70 col" style="float:left;">
	
		<div class="white box">
			<h2><?php echo JText::_('COM_MPSFLUSHER_VIEW_FEATURE_LABEL'); ?></h2>
			<p><?php echo JText::_('COM_MPSFLUSHER_VIEW_FEATURE_DESC'); ?></p>
			<p><?php echo JText::_('COM_MPSFLUSHER_VIEW_FEATURE_TECH'); ?></p>
			<p><?php echo JText::_('COM_MPSFLUSHER_VIEW_FEATURE_MORE'); ?> <a href="https://developers.google.com/speed/docs/mod_pagespeed/system#flush_cache"><?php echo JText::_('COM_MPSFLUSHER_VIEW_FEATURE_HERE'); ?></a>.</p>
		</div>
		
		<div class="white box">
			<h2><?php echo JText::_('COM_MPSFLUSHER_VIEW_CONFIGURATION_LABEL'); ?></h2>
			<p><?php echo JText::_('COM_MPSFLUSHER_VIEW_CONFIGURATION_PATH'); ?></p>
				<div class="black box">
					<?php echo $path; ?>
				</div>
			<p><?php echo JText::_('COM_MPSFLUSHER_VIEW_CONFIGURATION_TIMESTAMP'); ?></p>
				<div class="black box">
					<?php echo $result; ?>
				</div>
		</div>
	</div>
	<!-- Info table -->
	<div class="width-30 col" style="float:right;">
		<table class="adminform">
			<tr>
			<td>
				<table width="100%">
				<thead>
					<tr>
					<tr>
						<th colspan="2" style="text-align:center;"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_INFO'); ?></th>
					</tr>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td bgcolor="#FFFFFF" colspan="2"><br />
						<div style="width=100%" align="center">
						<a href="http://www.upct.es" target="_blank"><img src="../media/com_linksgrid/images/escudo_upct.png" align="middle" alt="UPCT - logo"/></a>
						</div>
					</td>
					</tr>
					<tr>                  
					<td width="120" bgcolor="#FFFFFF"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_VERSION'); ?></td>              
					<td bgcolor="#FFFFFF">0.0.9</td>              
					</tr>
					<tr>
					<td bgcolor="#FFFFFF"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_ICONS_TITLE'); ?></td>
					<td bgcolor="#FFFFFF"><a href="http://www.everaldo.com/" target="_blank"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_ICONS_AUTHOR'); ?></a><?php echo " - "; ?><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_ICONS_PROJECT'); ?></td>
					</tr>
					<tr>
					<td bgcolor="#FFFFFF"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_COPYRIGHT'); ?></td>
					<td bgcolor="#FFFFFF">&copy; 2013 <a href="http://www.krls.es" target="_blank"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_COPYRIGHT_AUTHOR') ?></a> - <a href="http://www.appopulus.es" target="_blank"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_COPYRIGHT_COMPANY') ?></a></td>
					</tr>
					<tr>
					<td bgcolor="#FFFFFF"><?php echo JText::_('COM_MPSFLUSHER_COMPONENT_LICENSE'); ?></td>
					<td bgcolor="#FFFFFF">
						<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU GPL</a>
					</td>
					</tr>

				</tbody>
				</table>
			</td>
			</tr>
		</table>
	</div>

	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>

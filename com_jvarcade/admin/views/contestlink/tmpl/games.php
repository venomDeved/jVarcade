<?php
/**
 * @package		jVArcade
 * @copyright   Copyright (C) 2017 jVArcade.com
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPLv3 or later
 * @link		https://jvarcade.com
 */



// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php if(is_array($this->games) && count($this->games)) : ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th width="20"><?php echo Joomla\CMS\HTML\HTMLHelper::_('grid.checkall'); ?></th>
			<th style="text-align: center;" class="title"><?php echo JText::_('COM_JVARCADE_GAMES_ID'); ?></th>
			<th style="text-align: center;" class="title"><?php echo JText::_('COM_JVARCADE_GAMES_TITLE'); ?></th>
			<th style="text-align: center;"><?php echo JText::_('COM_JVARCADE_GAMES_NUMPLAYED'); ?></th>
		</tr>
	</thead>
	<tbody>
<?php
		$i = 0;
		if (is_array($this->games)) {
			foreach ($this->games as $k => $obj) {
				$imgtag = Joomla\CMS\HTML\HTMLHelper::_('image','admin/publish_x.png', '', array('border' => 0), true);
		?>
				<tr class="<?php echo "row$i"; ?>">
					<td style="text-align: center;"><?php echo Joomla\CMS\HTML\HTMLHelper::_('grid.id', $k, $obj->id, false, 'cid'); ?></td>
					<td style="text-align: center;"><?php echo $obj->id; ?></td>
					<td style="text-align: center;"><a target="_blank" href="<?php echo Joomla\CMS\Router\Route::_('index.php?option=com_jvarcade&view=game&layout=edit&id=' . $obj->id); ?>"><?php echo $obj->title; ?></a></td>
					<td style="text-align: center;"><?php echo $obj->numplayed; ?></td>
				</tr>
		<?php
				if ($i == 0) {
					$i = 1;
				} else {
					$i++;
				}
			}
		}
		?>
	</tbody>
</table>
<?php else: ?>
<?php echo JText::_('COM_JVARCADE_CONTESTSLINK_NOGAMES'); ?>
<?php endif; ?>
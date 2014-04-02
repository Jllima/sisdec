<div class="sisdecTipologies form">
<?php echo $this->Form->create('SisdecTipology'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sisdec Tipology'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SisdecTipology.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SisdecTipology.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Tipologies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
	</ul>
</div>

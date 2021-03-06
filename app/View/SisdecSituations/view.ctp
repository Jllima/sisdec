<div class="sisdecSituations view">
<h2><?php echo __('Sisdec Situation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sisdecSituation['SisdecSituation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($sisdecSituation['SisdecSituation']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sisdec Situation'), array('action' => 'edit', $sisdecSituation['SisdecSituation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sisdec Situation'), array('action' => 'delete', $sisdecSituation['SisdecSituation']['id']), null, __('Are you sure you want to delete # %s?', $sisdecSituation['SisdecSituation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Situations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Situation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sisdec Occurrences'); ?></h3>
	<?php if (!empty($sisdecSituation['SisdecOccurrence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Protocolo'); ?></th>
		<th><?php echo __('Data Abertura'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Sisdec Tipology Id'); ?></th>
		<th><?php echo __('Sisdec Place Id'); ?></th>
		<th><?php echo __('Sisdec Situation Id'); ?></th>
		<th><?php echo __('Sisdec Source Id'); ?></th>
		<th><?php echo __('Sisdec Neighborhood Id'); ?></th>
		<th><?php echo __('Endereco Occurrence'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecSituation['SisdecOccurrence'] as $sisdecOccurrence): ?>
		<tr>
			<td><?php echo $sisdecOccurrence['id']; ?></td>
			<td><?php echo $sisdecOccurrence['protocolo']; ?></td>
			<td><?php echo $sisdecOccurrence['data_abertura']; ?></td>
			<td><?php echo $sisdecOccurrence['descricao']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_tipology_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_place_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_situation_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_source_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_neighborhood_id']; ?></td>
			<td><?php echo $sisdecOccurrence['endereco_occurrence']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sisdec_occurrences', 'action' => 'view', $sisdecOccurrence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sisdec_occurrences', 'action' => 'edit', $sisdecOccurrence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sisdec_occurrences', 'action' => 'delete', $sisdecOccurrence['id']), null, __('Are you sure you want to delete # %s?', $sisdecOccurrence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
 		<legend><?php __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('role_id', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sport', true), array('controller' => 'people_sports', 'action' => 'add', $this->Form->value('Person.id')));?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'people_matches', 'action' => 'add', $this->Form->value('Person.id')));?> </li>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Person.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('action' => 'index'));?></li>
	</ul>
</div>
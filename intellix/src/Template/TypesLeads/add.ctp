<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesLead $typesLead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Types Leads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesLeads form large-9 medium-8 columns content">
    <?= $this->Form->create($typesLead) ?>
    <fieldset>
        <legend><?= __('Add Types Lead') ?></legend>
        <?php
            echo $this->Form->control('name_type');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

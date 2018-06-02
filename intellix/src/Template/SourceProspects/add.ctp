<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SourceProspect $sourceProspect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sourceProspects form large-9 medium-8 columns content">
    <?= $this->Form->create($sourceProspect) ?>
    <fieldset>
        <legend><?= __('Add Source Prospect') ?></legend>
        <?php
            echo $this->Form->control('name_prospect');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

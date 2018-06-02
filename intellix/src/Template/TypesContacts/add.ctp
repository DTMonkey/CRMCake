<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesContact $typesContact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Types Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesContacts form large-9 medium-8 columns content">
    <?= $this->Form->create($typesContact) ?>
    <fieldset>
        <legend><?= __('Add Types Contact') ?></legend>
        <?php
            echo $this->Form->control('name_type');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

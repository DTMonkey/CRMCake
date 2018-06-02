<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaidTo $paidTo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paidTo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paidTo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paid To'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paidTo form large-9 medium-8 columns content">
    <?= $this->Form->create($paidTo) ?>
    <fieldset>
        <legend><?= __('Edit Paid To') ?></legend>
        <?php
            echo $this->Form->control('percentage');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

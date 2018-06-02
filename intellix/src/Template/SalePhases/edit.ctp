<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalePhase $salePhase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salePhase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salePhase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sale Phases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salePhases form large-9 medium-8 columns content">
    <?= $this->Form->create($salePhase) ?>
    <fieldset>
        <legend><?= __('Edit Sale Phase') ?></legend>
        <?php
            echo $this->Form->control('name_phase');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

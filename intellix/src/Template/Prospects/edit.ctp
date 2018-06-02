<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospect->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospects form large-9 medium-8 columns content">
    <?= $this->Form->create($prospect) ?>
    <fieldset>
        <legend><?= __('Edit Prospect') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('phone');
            echo $this->Form->control('society');
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('web_site');
            echo $this->Form->control('city');
            echo $this->Form->control('fax');
            echo $this->Form->control('email_opt_out');
            echo $this->Form->control('title');
            echo $this->Form->control('other_sector');
            echo $this->Form->control('effective');
            echo $this->Form->control('secondary_email');
            echo $this->Form->control('pobox');
            echo $this->Form->control('wilaya');
            echo $this->Form->control('description');
            echo $this->Form->control('comments');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('source_prospect_id', ['options' => $sourceProspects, 'empty' => true]);
            echo $this->Form->control('statut_id', ['options' => $status, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 




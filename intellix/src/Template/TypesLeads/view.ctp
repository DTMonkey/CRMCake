<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesLead $typesLead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Types Lead'), ['action' => 'edit', $typesLead->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Types Lead'), ['action' => 'delete', $typesLead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesLead->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types Leads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Lead'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typesLeads view large-9 medium-8 columns content">
    <h3><?= h($typesLead->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Type') ?></th>
            <td><?= h($typesLead->name_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $typesLead->has('user') ? $this->Html->link($typesLead->user->id, ['controller' => 'Users', 'action' => 'view', $typesLead->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typesLead->id) ?></td>
        </tr>
    </table>
</div>

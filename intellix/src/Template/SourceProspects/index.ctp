<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SourceProspect[]|\Cake\Collection\CollectionInterface $sourceProspects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['action' => 'add']) ?></li>
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
<div class="sourceProspects index large-9 medium-8 columns content">
    <h3><?= __('Source Prospects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_prospect') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sourceProspects as $sourceProspect): ?>
            <tr>
                <td><?= $this->Number->format($sourceProspect->id) ?></td>
                <td><?= h($sourceProspect->name_prospect) ?></td>
                <td><?= $sourceProspect->has('user') ? $this->Html->link($sourceProspect->user->id, ['controller' => 'Users', 'action' => 'view', $sourceProspect->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sourceProspect->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sourceProspect->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sourceProspect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sourceProspect->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesLead[]|\Cake\Collection\CollectionInterface $typesLeads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Types Lead'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesLeads index large-9 medium-8 columns content">
    <h3><?= __('Types Leads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typesLeads as $typesLead): ?>
            <tr>
                <td><?= $this->Number->format($typesLead->id) ?></td>
                <td><?= h($typesLead->name_type) ?></td>
                <td><?= $typesLead->has('user') ? $this->Html->link($typesLead->user->id, ['controller' => 'Users', 'action' => 'view', $typesLead->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typesLead->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typesLead->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typesLead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesLead->id)]) ?>
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

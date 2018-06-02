<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead[]|\Cake\Collection\CollectionInterface $leads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sale Phases'), ['controller' => 'SalePhases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sale Phase'), ['controller' => 'SalePhases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paid To'), ['controller' => 'PaidTo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paid To'), ['controller' => 'PaidTo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leads index large-9 medium-8 columns content">
    <h3><?= __('Leads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_lead') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forcecast_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('term') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next') ?></th>
                <th scope="col"><?= $this->Paginator->sort('probability') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_phase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campaign_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid_to_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secteur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lead_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_prospect_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= $this->Number->format($lead->id) ?></td>
                <td><?= h($lead->name_lead) ?></td>
                <td><?= $this->Number->format($lead->forcecast_amount) ?></td>
                <td><?= h($lead->term) ?></td>
                <td><?= h($lead->next) ?></td>
                <td><?= $this->Number->format($lead->probability) ?></td>
                <td><?= h($lead->description) ?></td>
                <td><?= h($lead->created) ?></td>
                <td><?= h($lead->modified) ?></td>
                <td><?= $lead->has('sale_phase') ? $this->Html->link($lead->sale_phase->id, ['controller' => 'SalePhases', 'action' => 'view', $lead->sale_phase->id]) : '' ?></td>
                <td><?= $lead->has('campaign') ? $this->Html->link($lead->campaign->id, ['controller' => 'Campaigns', 'action' => 'view', $lead->campaign->id]) : '' ?></td>
                <td><?= $lead->has('user') ? $this->Html->link($lead->user->id, ['controller' => 'Users', 'action' => 'view', $lead->user->id]) : '' ?></td>
                <td><?= $this->Number->format($lead->account_id) ?></td>
                <td><?= $this->Number->format($lead->contact_id) ?></td>
                <td><?= $lead->has('paid_to') ? $this->Html->link($lead->paid_to->id, ['controller' => 'PaidTo', 'action' => 'view', $lead->paid_to->id]) : '' ?></td>
                <td><?= $lead->has('secteur') ? $this->Html->link($lead->secteur->id, ['controller' => 'Secteurs', 'action' => 'view', $lead->secteur->id]) : '' ?></td>
                <td><?= $lead->has('lead') ? $this->Html->link($lead->lead->id, ['controller' => 'Leads', 'action' => 'view', $lead->lead->id]) : '' ?></td>
                <td><?= $lead->has('source_prospect') ? $this->Html->link($lead->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $lead->source_prospect->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lead->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lead->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]) ?>
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

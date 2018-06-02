<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campaign $campaign
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campaign'), ['action' => 'edit', $campaign->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaign'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campaigns view large-9 medium-8 columns content">
    <h3><?= h($campaign->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Campaign') ?></th>
            <td><?= h($campaign->name_campaign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $campaign->has('user') ? $this->Html->link($campaign->user->id, ['controller' => 'Users', 'action' => 'view', $campaign->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($campaign->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($campaign->leads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Lead') ?></th>
                <th scope="col"><?= __('Forcecast Amount') ?></th>
                <th scope="col"><?= __('Term') ?></th>
                <th scope="col"><?= __('Next') ?></th>
                <th scope="col"><?= __('Probability') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sale Phase Id') ?></th>
                <th scope="col"><?= __('Campaign Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Paid To Id') ?></th>
                <th scope="col"><?= __('Secteur Id') ?></th>
                <th scope="col"><?= __('Lead Type Id') ?></th>
                <th scope="col"><?= __('Source Prospect Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campaign->leads as $leads): ?>
            <tr>
                <td><?= h($leads->id) ?></td>
                <td><?= h($leads->name_lead) ?></td>
                <td><?= h($leads->forcecast_amount) ?></td>
                <td><?= h($leads->term) ?></td>
                <td><?= h($leads->next) ?></td>
                <td><?= h($leads->probability) ?></td>
                <td><?= h($leads->description) ?></td>
                <td><?= h($leads->created) ?></td>
                <td><?= h($leads->modified) ?></td>
                <td><?= h($leads->sale_phase_id) ?></td>
                <td><?= h($leads->campaign_id) ?></td>
                <td><?= h($leads->user_id) ?></td>
                <td><?= h($leads->account_id) ?></td>
                <td><?= h($leads->contact_id) ?></td>
                <td><?= h($leads->paid_to_id) ?></td>
                <td><?= h($leads->secteur_id) ?></td>
                <td><?= h($leads->lead_type_id) ?></td>
                <td><?= h($leads->source_prospect_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leads', 'action' => 'view', $leads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leads', 'action' => 'edit', $leads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leads', 'action' => 'delete', $leads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

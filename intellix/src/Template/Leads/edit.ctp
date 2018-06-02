<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lead->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['action' => 'index']) ?></li>
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
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leads form large-9 medium-8 columns content">
    <?= $this->Form->create($lead) ?>
    <fieldset>
        <legend><?= __('Edit Lead') ?></legend>
        <?php
            echo $this->Form->control('name_lead');
            echo $this->Form->control('forcecast_amount');
            echo $this->Form->control('term');
            echo $this->Form->control('next');
            echo $this->Form->control('probability');
            echo $this->Form->control('description');
            echo $this->Form->control('sale_phase_id', ['options' => $salePhases]);
            echo $this->Form->control('campaign_id', ['options' => $campaigns]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('account_id');
            echo $this->Form->control('contact_id');
            echo $this->Form->control('paid_to_id', ['options' => $paidTo]);
            echo $this->Form->control('secteur_id', ['options' => $secteurs]);
            echo $this->Form->control('lead_type_id', ['options' => $leads]);
            echo $this->Form->control('source_prospect_id', ['options' => $sourceProspects]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

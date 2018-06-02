<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lead'), ['action' => 'edit', $lead->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lead'), ['action' => 'delete', $lead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sale Phases'), ['controller' => 'SalePhases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale Phase'), ['controller' => 'SalePhases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paid To'), ['controller' => 'PaidTo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paid To'), ['controller' => 'PaidTo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="leads view large-9 medium-8 columns content">
    <h3><?= h($lead->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Lead') ?></th>
            <td><?= h($lead->name_lead) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next') ?></th>
            <td><?= h($lead->next) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($lead->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sale Phase') ?></th>
            <td><?= $lead->has('sale_phase') ? $this->Html->link($lead->sale_phase->id, ['controller' => 'SalePhases', 'action' => 'view', $lead->sale_phase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campaign') ?></th>
            <td><?= $lead->has('campaign') ? $this->Html->link($lead->campaign->id, ['controller' => 'Campaigns', 'action' => 'view', $lead->campaign->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $lead->has('user') ? $this->Html->link($lead->user->id, ['controller' => 'Users', 'action' => 'view', $lead->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid To') ?></th>
            <td><?= $lead->has('paid_to') ? $this->Html->link($lead->paid_to->id, ['controller' => 'PaidTo', 'action' => 'view', $lead->paid_to->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteur') ?></th>
            <td><?= $lead->has('secteur') ? $this->Html->link($lead->secteur->id, ['controller' => 'Secteurs', 'action' => 'view', $lead->secteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead') ?></th>
            <td><?= $lead->has('lead') ? $this->Html->link($lead->lead->id, ['controller' => 'Leads', 'action' => 'view', $lead->lead->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Prospect') ?></th>
            <td><?= $lead->has('source_prospect') ? $this->Html->link($lead->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $lead->source_prospect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lead->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forcecast Amount') ?></th>
            <td><?= $this->Number->format($lead->forcecast_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Probability') ?></th>
            <td><?= $this->Number->format($lead->probability) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Id') ?></th>
            <td><?= $this->Number->format($lead->account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Id') ?></th>
            <td><?= $this->Number->format($lead->contact_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Term') ?></th>
            <td><?= h($lead->term) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lead->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lead->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($lead->accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Account') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Effective') ?></th>
                <th scope="col"><?= __('Other Email') ?></th>
                <th scope="col"><?= __('Email Opt Out') ?></th>
                <th scope="col"><?= __('Web Site') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Other Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Owner') ?></th>
                <th scope="col"><?= __('Code Ape') ?></th>
                <th scope="col"><?= __('Annual Revenue') ?></th>
                <th scope="col"><?= __('Notify Owner') ?></th>
                <th scope="col"><?= __('Billing Addres') ?></th>
                <th scope="col"><?= __('Delivery Address') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Note Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Lead Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Secteur Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lead->accounts as $accounts): ?>
            <tr>
                <td><?= h($accounts->id) ?></td>
                <td><?= h($accounts->name_account) ?></td>
                <td><?= h($accounts->phone) ?></td>
                <td><?= h($accounts->effective) ?></td>
                <td><?= h($accounts->other_email) ?></td>
                <td><?= h($accounts->email_opt_out) ?></td>
                <td><?= h($accounts->web_site) ?></td>
                <td><?= h($accounts->fax) ?></td>
                <td><?= h($accounts->other_phone) ?></td>
                <td><?= h($accounts->email) ?></td>
                <td><?= h($accounts->owner) ?></td>
                <td><?= h($accounts->code_ape) ?></td>
                <td><?= h($accounts->annual_revenue) ?></td>
                <td><?= h($accounts->notify_owner) ?></td>
                <td><?= h($accounts->billing_addres) ?></td>
                <td><?= h($accounts->delivery_address) ?></td>
                <td><?= h($accounts->description) ?></td>
                <td><?= h($accounts->comments) ?></td>
                <td><?= h($accounts->created) ?></td>
                <td><?= h($accounts->modified) ?></td>
                <td><?= h($accounts->account_id) ?></td>
                <td><?= h($accounts->note_id) ?></td>
                <td><?= h($accounts->user_id) ?></td>
                <td><?= h($accounts->lead_id) ?></td>
                <td><?= h($accounts->contact_id) ?></td>
                <td><?= h($accounts->secteur_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($lead->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Other Phone') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Do Not Call') ?></th>
                <th scope="col"><?= __('Interested In') ?></th>
                <th scope="col"><?= __('Notify Owner') ?></th>
                <th scope="col"><?= __('Referent') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Entreprise') ?></th>
                <th scope="col"><?= __('Fonction') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Assistant') ?></th>
                <th scope="col"><?= __('Email Opt Out') ?></th>
                <th scope="col"><?= __('Client') ?></th>
                <th scope="col"><?= __('Service Portal Access') ?></th>
                <th scope="col"><?= __('Support Start Date') ?></th>
                <th scope="col"><?= __('End Date Support') ?></th>
                <th scope="col"><?= __('Wilaya') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contact Type Id') ?></th>
                <th scope="col"><?= __('Lead Id') ?></th>
                <th scope="col"><?= __('Source Prospect Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Statut Id') ?></th>
                <th scope="col"><?= __('Secteur Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lead->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->name) ?></td>
                <td><?= h($contacts->phone) ?></td>
                <td><?= h($contacts->mobile) ?></td>
                <td><?= h($contacts->other_phone) ?></td>
                <td><?= h($contacts->fax) ?></td>
                <td><?= h($contacts->do_not_call) ?></td>
                <td><?= h($contacts->interested_in) ?></td>
                <td><?= h($contacts->notify_owner) ?></td>
                <td><?= h($contacts->referent) ?></td>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->entreprise) ?></td>
                <td><?= h($contacts->fonction) ?></td>
                <td><?= h($contacts->email) ?></td>
                <td><?= h($contacts->assistant) ?></td>
                <td><?= h($contacts->email_opt_out) ?></td>
                <td><?= h($contacts->client) ?></td>
                <td><?= h($contacts->service_portal_access) ?></td>
                <td><?= h($contacts->support_start_date) ?></td>
                <td><?= h($contacts->end_date_support) ?></td>
                <td><?= h($contacts->wilaya) ?></td>
                <td><?= h($contacts->city) ?></td>
                <td><?= h($contacts->created) ?></td>
                <td><?= h($contacts->modified) ?></td>
                <td><?= h($contacts->user_id) ?></td>
                <td><?= h($contacts->contact_type_id) ?></td>
                <td><?= h($contacts->lead_id) ?></td>
                <td><?= h($contacts->source_prospect_id) ?></td>
                <td><?= h($contacts->account_id) ?></td>
                <td><?= h($contacts->statut_id) ?></td>
                <td><?= h($contacts->secteur_id) ?></td>
                <td><?= h($contacts->product_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

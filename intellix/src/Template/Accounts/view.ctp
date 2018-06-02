<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Account') ?></th>
            <td><?= h($account->name_account) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Effective') ?></th>
            <td><?= h($account->effective) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Email') ?></th>
            <td><?= h($account->other_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Web Site') ?></th>
            <td><?= h($account->web_site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($account->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= h($account->owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Ape') ?></th>
            <td><?= h($account->code_ape) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Addres') ?></th>
            <td><?= h($account->billing_addres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address') ?></th>
            <td><?= h($account->delivery_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($account->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($account->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= $account->has('note') ? $this->Html->link($account->note->id, ['controller' => 'Notes', 'action' => 'view', $account->note->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $account->has('user') ? $this->Html->link($account->user->id, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteur') ?></th>
            <td><?= $account->has('secteur') ? $this->Html->link($account->secteur->id, ['controller' => 'Secteurs', 'action' => 'view', $account->secteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($account->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($account->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Opt Out') ?></th>
            <td><?= $this->Number->format($account->email_opt_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= $this->Number->format($account->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Phone') ?></th>
            <td><?= $this->Number->format($account->other_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annual Revenue') ?></th>
            <td><?= $this->Number->format($account->annual_revenue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notify Owner') ?></th>
            <td><?= $this->Number->format($account->notify_owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Id') ?></th>
            <td><?= $this->Number->format($account->account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead Id') ?></th>
            <td><?= $this->Number->format($account->lead_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Id') ?></th>
            <td><?= $this->Number->format($account->contact_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($account->accounts)): ?>
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
            <?php foreach ($account->accounts as $accounts): ?>
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
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($account->leads)): ?>
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
            <?php foreach ($account->leads as $leads): ?>
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
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($account->contacts)): ?>
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
            <?php foreach ($account->contacts as $contacts): ?>
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

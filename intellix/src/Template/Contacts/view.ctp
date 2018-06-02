<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($contact->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Interested In') ?></th>
            <td><?= h($contact->interested_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($contact->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entreprise') ?></th>
            <td><?= h($contact->entreprise) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fonction') ?></th>
            <td><?= h($contact->fonction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assistant') ?></th>
            <td><?= h($contact->assistant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wilaya') ?></th>
            <td><?= h($contact->wilaya) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($contact->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $contact->has('user') ? $this->Html->link($contact->user->id, ['controller' => 'Users', 'action' => 'view', $contact->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contact->has('contact') ? $this->Html->link($contact->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contact->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Prospect') ?></th>
            <td><?= $contact->has('source_prospect') ? $this->Html->link($contact->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $contact->source_prospect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $contact->has('status') ? $this->Html->link($contact->status->id, ['controller' => 'Status', 'action' => 'view', $contact->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteur') ?></th>
            <td><?= $contact->has('secteur') ? $this->Html->link($contact->secteur->id, ['controller' => 'Secteurs', 'action' => 'view', $contact->secteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $contact->has('product') ? $this->Html->link($contact->product->id, ['controller' => 'Products', 'action' => 'view', $contact->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($contact->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Phone') ?></th>
            <td><?= $this->Number->format($contact->other_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= $this->Number->format($contact->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Do Not Call') ?></th>
            <td><?= $this->Number->format($contact->do_not_call) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notify Owner') ?></th>
            <td><?= $this->Number->format($contact->notify_owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referent') ?></th>
            <td><?= $this->Number->format($contact->referent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Opt Out') ?></th>
            <td><?= $this->Number->format($contact->email_opt_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $this->Number->format($contact->client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Portal Access') ?></th>
            <td><?= $this->Number->format($contact->service_portal_access) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead Id') ?></th>
            <td><?= $this->Number->format($contact->lead_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Id') ?></th>
            <td><?= $this->Number->format($contact->account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Support Start Date') ?></th>
            <td><?= h($contact->support_start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date Support') ?></th>
            <td><?= h($contact->end_date_support) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($contact->leads)): ?>
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
            <?php foreach ($contact->leads as $leads): ?>
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
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($contact->accounts)): ?>
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
            <?php foreach ($contact->accounts as $accounts): ?>
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
</div>

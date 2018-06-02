<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paid To'), ['controller' => 'PaidTo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paid To'), ['controller' => 'PaidTo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prospects'), ['controller' => 'Prospects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect'), ['controller' => 'Prospects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sale Phases'), ['controller' => 'SalePhases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale Phase'), ['controller' => 'SalePhases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types Contacts'), ['controller' => 'TypesContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Contact'), ['controller' => 'TypesContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types Leads'), ['controller' => 'TypesLeads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Lead'), ['controller' => 'TypesLeads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Full Name') ?></th>
            <td><?= h($user->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($user->accounts)): ?>
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
            <?php foreach ($user->accounts as $accounts): ?>
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
        <h4><?= __('Related Campaigns') ?></h4>
        <?php if (!empty($user->campaigns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Campaign') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->campaigns as $campaigns): ?>
            <tr>
                <td><?= h($campaigns->id) ?></td>
                <td><?= h($campaigns->name_campaign) ?></td>
                <td><?= h($campaigns->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Campaigns', 'action' => 'view', $campaigns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Campaigns', 'action' => 'edit', $campaigns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campaigns', 'action' => 'delete', $campaigns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaigns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($user->contacts)): ?>
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
            <?php foreach ($user->contacts as $contacts): ?>
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
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($user->leads)): ?>
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
            <?php foreach ($user->leads as $leads): ?>
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
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($user->notes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Notes') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->notes as $notes): ?>
            <tr>
                <td><?= h($notes->id) ?></td>
                <td><?= h($notes->name_notes) ?></td>
                <td><?= h($notes->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paid To') ?></h4>
        <?php if (!empty($user->paid_to)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Percentage') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->paid_to as $paidTo): ?>
            <tr>
                <td><?= h($paidTo->id) ?></td>
                <td><?= h($paidTo->percentage) ?></td>
                <td><?= h($paidTo->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PaidTo', 'action' => 'view', $paidTo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PaidTo', 'action' => 'edit', $paidTo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PaidTo', 'action' => 'delete', $paidTo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paidTo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($user->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Product') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contacts Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->name_product) ?></td>
                <td><?= h($products->user_id) ?></td>
                <td><?= h($products->contacts_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prospects') ?></h4>
        <?php if (!empty($user->prospects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Society') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Web Site') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Email Opt Out') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Other Sector') ?></th>
                <th scope="col"><?= __('Effective') ?></th>
                <th scope="col"><?= __('Secondary Email') ?></th>
                <th scope="col"><?= __('Pobox') ?></th>
                <th scope="col"><?= __('Wilaya') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Source Prospect Id') ?></th>
                <th scope="col"><?= __('Statut Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->prospects as $prospects): ?>
            <tr>
                <td><?= h($prospects->id) ?></td>
                <td><?= h($prospects->name) ?></td>
                <td><?= h($prospects->first_name) ?></td>
                <td><?= h($prospects->phone) ?></td>
                <td><?= h($prospects->society) ?></td>
                <td><?= h($prospects->mobile) ?></td>
                <td><?= h($prospects->email) ?></td>
                <td><?= h($prospects->web_site) ?></td>
                <td><?= h($prospects->city) ?></td>
                <td><?= h($prospects->fax) ?></td>
                <td><?= h($prospects->email_opt_out) ?></td>
                <td><?= h($prospects->title) ?></td>
                <td><?= h($prospects->other_sector) ?></td>
                <td><?= h($prospects->effective) ?></td>
                <td><?= h($prospects->secondary_email) ?></td>
                <td><?= h($prospects->pobox) ?></td>
                <td><?= h($prospects->wilaya) ?></td>
                <td><?= h($prospects->description) ?></td>
                <td><?= h($prospects->comments) ?></td>
                <td><?= h($prospects->created) ?></td>
                <td><?= h($prospects->modified) ?></td>
                <td><?= h($prospects->user_id) ?></td>
                <td><?= h($prospects->source_prospect_id) ?></td>
                <td><?= h($prospects->statut_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prospects', 'action' => 'view', $prospects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prospects', 'action' => 'edit', $prospects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prospects', 'action' => 'delete', $prospects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sale Phases') ?></h4>
        <?php if (!empty($user->sale_phases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Phase') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sale_phases as $salePhases): ?>
            <tr>
                <td><?= h($salePhases->id) ?></td>
                <td><?= h($salePhases->name_phase) ?></td>
                <td><?= h($salePhases->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalePhases', 'action' => 'view', $salePhases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalePhases', 'action' => 'edit', $salePhases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalePhases', 'action' => 'delete', $salePhases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salePhases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Secteurs') ?></h4>
        <?php if (!empty($user->secteurs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Secteur') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->secteurs as $secteurs): ?>
            <tr>
                <td><?= h($secteurs->id) ?></td>
                <td><?= h($secteurs->name_secteur) ?></td>
                <td><?= h($secteurs->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Secteurs', 'action' => 'view', $secteurs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Secteurs', 'action' => 'edit', $secteurs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Secteurs', 'action' => 'delete', $secteurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secteurs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Source Prospects') ?></h4>
        <?php if (!empty($user->source_prospects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Prospect') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->source_prospects as $sourceProspects): ?>
            <tr>
                <td><?= h($sourceProspects->id) ?></td>
                <td><?= h($sourceProspects->name_prospect) ?></td>
                <td><?= h($sourceProspects->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SourceProspects', 'action' => 'view', $sourceProspects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SourceProspects', 'action' => 'edit', $sourceProspects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SourceProspects', 'action' => 'delete', $sourceProspects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sourceProspects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Status') ?></h4>
        <?php if (!empty($user->status)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Statut') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->status as $status): ?>
            <tr>
                <td><?= h($status->id) ?></td>
                <td><?= h($status->name_statut) ?></td>
                <td><?= h($status->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Status', 'action' => 'view', $status->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Status', 'action' => 'edit', $status->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Status', 'action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Types Contacts') ?></h4>
        <?php if (!empty($user->types_contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Type') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->types_contacts as $typesContacts): ?>
            <tr>
                <td><?= h($typesContacts->id) ?></td>
                <td><?= h($typesContacts->name_type) ?></td>
                <td><?= h($typesContacts->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TypesContacts', 'action' => 'view', $typesContacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TypesContacts', 'action' => 'edit', $typesContacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TypesContacts', 'action' => 'delete', $typesContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesContacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Types Leads') ?></h4>
        <?php if (!empty($user->types_leads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Type') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->types_leads as $typesLeads): ?>
            <tr>
                <td><?= h($typesLeads->id) ?></td>
                <td><?= h($typesLeads->name_type) ?></td>
                <td><?= h($typesLeads->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TypesLeads', 'action' => 'view', $typesLeads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TypesLeads', 'action' => 'edit', $typesLeads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TypesLeads', 'action' => 'delete', $typesLeads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesLeads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

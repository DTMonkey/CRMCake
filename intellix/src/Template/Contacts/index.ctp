<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secteur'), ['controller' => 'Secteurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index large-9 medium-8 columns content">
    <h3><?= __('Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('other_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('do_not_call') ?></th>
                <th scope="col"><?= $this->Paginator->sort('interested_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notify_owner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entreprise') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fonction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assistant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_opt_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_portal_access') ?></th>
                <th scope="col"><?= $this->Paginator->sort('support_start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date_support') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wilaya') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lead_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_prospect_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statut_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secteur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->name) ?></td>
                <td><?= h($contact->phone) ?></td>
                <td><?= $this->Number->format($contact->mobile) ?></td>
                <td><?= $this->Number->format($contact->other_phone) ?></td>
                <td><?= $this->Number->format($contact->fax) ?></td>
                <td><?= $this->Number->format($contact->do_not_call) ?></td>
                <td><?= h($contact->interested_in) ?></td>
                <td><?= $this->Number->format($contact->notify_owner) ?></td>
                <td><?= $this->Number->format($contact->referent) ?></td>
                <td><?= h($contact->first_name) ?></td>
                <td><?= h($contact->entreprise) ?></td>
                <td><?= h($contact->fonction) ?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->assistant) ?></td>
                <td><?= $this->Number->format($contact->email_opt_out) ?></td>
                <td><?= $this->Number->format($contact->client) ?></td>
                <td><?= $this->Number->format($contact->service_portal_access) ?></td>
                <td><?= h($contact->support_start_date) ?></td>
                <td><?= h($contact->end_date_support) ?></td>
                <td><?= h($contact->wilaya) ?></td>
                <td><?= h($contact->city) ?></td>
                <td><?= h($contact->created) ?></td>
                <td><?= h($contact->modified) ?></td>
                <td><?= $contact->has('user') ? $this->Html->link($contact->user->id, ['controller' => 'Users', 'action' => 'view', $contact->user->id]) : '' ?></td>
                <td><?= $contact->has('contact') ? $this->Html->link($contact->contact->name, ['controller' => 'Contacts', 'action' => 'view', $contact->contact->id]) : '' ?></td>
                <td><?= $this->Number->format($contact->lead_id) ?></td>
                <td><?= $contact->has('source_prospect') ? $this->Html->link($contact->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $contact->source_prospect->id]) : '' ?></td>
                <td><?= $this->Number->format($contact->account_id) ?></td>
                <td><?= $contact->has('status') ? $this->Html->link($contact->status->id, ['controller' => 'Status', 'action' => 'view', $contact->status->id]) : '' ?></td>
                <td><?= $contact->has('secteur') ? $this->Html->link($contact->secteur->id, ['controller' => 'Secteurs', 'action' => 'view', $contact->secteur->id]) : '' ?></td>
                <td><?= $contact->has('product') ? $this->Html->link($contact->product->id, ['controller' => 'Products', 'action' => 'view', $contact->product->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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

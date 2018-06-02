<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Product') ?></th>
            <td><?= h($product->name_product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $product->has('user') ? $this->Html->link($product->user->id, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacts Id') ?></th>
            <td><?= $this->Number->format($product->contacts_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($product->contacts)): ?>
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
            <?php foreach ($product->contacts as $contacts): ?>
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

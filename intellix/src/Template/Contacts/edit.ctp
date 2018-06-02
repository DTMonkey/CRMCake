<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
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
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('mobile');
            echo $this->Form->control('other_phone');
            echo $this->Form->control('fax');
            echo $this->Form->control('do_not_call');
            echo $this->Form->control('interested_in');
            echo $this->Form->control('notify_owner');
            echo $this->Form->control('referent');
            echo $this->Form->control('first_name');
            echo $this->Form->control('entreprise');
            echo $this->Form->control('fonction');
            echo $this->Form->control('email');
            echo $this->Form->control('assistant');
            echo $this->Form->control('email_opt_out');
            echo $this->Form->control('client');
            echo $this->Form->control('service_portal_access');
            echo $this->Form->control('support_start_date', ['empty' => true]);
            echo $this->Form->control('end_date_support', ['empty' => true]);
            echo $this->Form->control('wilaya');
            echo $this->Form->control('city');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('contact_type_id', ['options' => $contacts, 'empty' => true]);
            echo $this->Form->control('lead_id');
            echo $this->Form->control('source_prospect_id', ['options' => $sourceProspects, 'empty' => true]);
            echo $this->Form->control('account_id');
            echo $this->Form->control('statut_id', ['options' => $status, 'empty' => true]);
            echo $this->Form->control('secteur_id', ['options' => $secteurs, 'empty' => true]);
            echo $this->Form->control('product_id', ['options' => $products, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

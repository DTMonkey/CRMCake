<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prospect'), ['action' => 'edit', $prospect->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prospect'), ['action' => 'delete', $prospect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prospects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prospect'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prospects view large-9 medium-8 columns content">
    <h3><?= h($prospect->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($prospect->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($prospect->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Society') ?></th>
            <td><?= h($prospect->society) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($prospect->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Web Site') ?></th>
            <td><?= h($prospect->web_site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($prospect->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($prospect->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Sector') ?></th>
            <td><?= h($prospect->other_sector) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Effective') ?></th>
            <td><?= h($prospect->effective) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secondary Email') ?></th>
            <td><?= h($prospect->secondary_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pobox') ?></th>
            <td><?= h($prospect->pobox) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wilaya') ?></th>
            <td><?= h($prospect->wilaya) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($prospect->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($prospect->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $prospect->has('user') ? $this->Html->link($prospect->user->id, ['controller' => 'Users', 'action' => 'view', $prospect->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Prospect') ?></th>
            <td><?= $prospect->has('source_prospect') ? $this->Html->link($prospect->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $prospect->source_prospect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $prospect->has('status') ? $this->Html->link($prospect->status->id, ['controller' => 'Status', 'action' => 'view', $prospect->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prospect->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($prospect->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($prospect->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= $this->Number->format($prospect->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Opt Out') ?></th>
            <td><?= $this->Number->format($prospect->email_opt_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($prospect->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($prospect->modified) ?></td>
        </tr>
    </table>
</div>

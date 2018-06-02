<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesContact $typesContact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Types Contact'), ['action' => 'edit', $typesContact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Types Contact'), ['action' => 'delete', $typesContact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesContact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typesContacts view large-9 medium-8 columns content">
    <h3><?= h($typesContact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Type') ?></th>
            <td><?= h($typesContact->name_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $typesContact->has('user') ? $this->Html->link($typesContact->user->id, ['controller' => 'Users', 'action' => 'view', $typesContact->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typesContact->id) ?></td>
        </tr>
    </table>
</div>

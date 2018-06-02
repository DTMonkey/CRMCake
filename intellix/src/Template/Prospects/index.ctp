<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect[]|\Cake\Collection\CollectionInterface $prospects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prospect'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Source Prospects'), ['controller' => 'SourceProspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source Prospect'), ['controller' => 'SourceProspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
    <div class="col-md-6">
    <h3><?= __('Prospects') ?></h3>
    </div>
    <div class="col-md-6 text-right"></div>
    <a href="" class="btn btn-primary">Add Prospect</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('society') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_site') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prospects as $prospect): ?>
            <tr>
                <td><?php echo $prospect->name ?></td>
                <td><?= $this->Number->format($prospect->id) ?></td>
                <td><?= h($prospect->name) ?></td>
                <td><?= h($prospect->first_name) ?></td>
                <td><?= $this->Number->format($prospect->phone) ?></td>
                <td><?= h($prospect->society) ?></td>
                <td><?= $this->Number->format($prospect->mobile) ?></td>
                <td><?= h($prospect->email) ?></td>
                <td><?= h($prospect->web_site) ?></td>
                <td><?= h($prospect->city) ?></td>
                <td><?= $this->Number->format($prospect->fax) ?></td>
                <td><?= $this->Number->format($prospect->email_opt_out) ?></td>
                <td><?= h($prospect->title) ?></td>
                <td><?= h($prospect->other_sector) ?></td>
                <td><?= h($prospect->effective) ?></td>
                <td><?= h($prospect->secondary_email) ?></td>
                <td><?= h($prospect->pobox) ?></td>
                <td><?= h($prospect->wilaya) ?></td>
                <td><?= h($prospect->description) ?></td>
                <td><?= h($prospect->comments) ?></td>
                <td><?= h($prospect->created) ?></td>
                <td><?= h($prospect->modified) ?></td>
                <td><?= $prospect->has('user') ? $this->Html->link($prospect->user->id, ['controller' => 'Users', 'action' => 'view', $prospect->user->id]) : '' ?></td>
                <td><?= $prospect->has('source_prospect') ? $this->Html->link($prospect->source_prospect->id, ['controller' => 'SourceProspects', 'action' => 'view', $prospect->source_prospect->id]) : '' ?></td>
                <td><?= $prospect->has('status') ? $this->Html->link($prospect->status->id, ['controller' => 'Status', 'action' => 'view', $prospect->status->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prospect->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prospect->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prospect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id)]) ?>
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




<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $specialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Specialty'), ['action' => 'edit', $specialty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Specialty'), ['action' => 'delete', $specialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Specialty'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="specialty view large-9 medium-8 columns content">
    <h3><?= h($specialty->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($specialty->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($specialty->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($specialty->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($specialty->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($specialty->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($specialty->text)); ?>
    </div>
</div>

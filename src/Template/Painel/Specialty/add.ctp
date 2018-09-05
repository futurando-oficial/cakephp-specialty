<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $specialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Specialty'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="specialty form large-9 medium-8 columns content">
    <?= $this->Form->create($specialty) ?>
    <fieldset>
        <legend><?= __('Add Specialty') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('image');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
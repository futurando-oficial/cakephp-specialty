<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $specialty
 */
?>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $specialty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Specialty'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<style>
    .ck.ck-editor , .ck-editor__editable{
        min-height: 500px;
    }
</style>
<div class="specialty form large-9 medium-8 columns content">
    <?= $this->Form->create($specialty) ?>
    <fieldset>
        <legend><?= __('Edit Specialty') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('image');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['id'=>'submit']) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    const textarea = document.querySelector('#text');

    ClassicEditor
            .create(textarea)
            .then(editor => {
                window.editor = editor
            });

    document.getElementById('submit').onclick = () => {
        textarea.value = editor.getData();
    }
</script>
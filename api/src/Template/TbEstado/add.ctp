<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Estado'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbEstado form large-9 medium-8 columns content">
    <?= $this->Form->create($tbEstado) ?>
    <fieldset>
        <legend><?= __('Add Tb Estado') ?></legend>
        <?php
            echo $this->Form->input('nm_estado');
            echo $this->Form->input('sg_estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

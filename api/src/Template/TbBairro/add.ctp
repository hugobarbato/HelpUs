<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Bairro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbBairro form large-9 medium-8 columns content">
    <?= $this->Form->create($tbBairro) ?>
    <fieldset>
        <legend><?= __('Add Tb Bairro') ?></legend>
        <?php
            echo $this->Form->input('nm_bairro');
            echo $this->Form->input('cd_cidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

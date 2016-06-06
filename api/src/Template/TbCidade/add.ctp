<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Cidade'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbCidade form large-9 medium-8 columns content">
    <?= $this->Form->create($tbCidade) ?>
    <fieldset>
        <legend><?= __('Add Tb Cidade') ?></legend>
        <?php
            echo $this->Form->input('nm_cidade');
            echo $this->Form->input('cd_estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

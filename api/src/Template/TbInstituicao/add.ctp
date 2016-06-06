<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Instituicao'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbInstituicao form large-9 medium-8 columns content">
    <?= $this->Form->create($tbInstituicao) ?>
    <fieldset>
        <legend><?= __('Add Tb Instituicao') ?></legend>
        <?php
            echo $this->Form->input('nm_instituicao');
            echo $this->Form->input('ds_instituicao');
            echo $this->Form->input('cd_cnpj');
            echo $this->Form->input('cd_categoria');
            echo $this->Form->input('cd_logo');
            echo $this->Form->input('cd_bg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

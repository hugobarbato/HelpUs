<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Endereco'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbEndereco form large-9 medium-8 columns content">
    <?= $this->Form->create($tbEndereco) ?>
    <fieldset>
        <legend><?= __('Add Tb Endereco') ?></legend>
        <?php
            echo $this->Form->input('cd_instituicao');
            echo $this->Form->input('cd_cep');
            echo $this->Form->input('nm_endereco');
            echo $this->Form->input('nm_numero');
            echo $this->Form->input('nm_complemento');
            echo $this->Form->input('cd_bairro');
            echo $this->Form->input('cd_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

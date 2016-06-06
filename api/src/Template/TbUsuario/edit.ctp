<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbUsuario->cd_usuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->cd_usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Usuario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbUsuario form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Tb Usuario') ?></legend>
        <?php
            echo $this->Form->input('nm_usuario');
            echo $this->Form->input('dt_nascimento');
            echo $this->Form->input('ic_sexo');
            echo $this->Form->input('nm_email');
            echo $this->Form->input('cd_senha');
            echo $this->Form->input('dt_cadastro');
            echo $this->Form->input('dt_ultimo_acesso', ['empty' => true]);
            echo $this->Form->input('ic_nivel');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

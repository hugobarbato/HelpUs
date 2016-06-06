<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Usuario'), ['action' => 'edit', $tbUsuario->cd_usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Usuario'), ['action' => 'delete', $tbUsuario->cd_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->cd_usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUsuario view large-9 medium-8 columns content">
    <h3><?= h($tbUsuario->cd_usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Usuario') ?></th>
            <td><?= h($tbUsuario->nm_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Ic Sexo') ?></th>
            <td><?= h($tbUsuario->ic_sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Email') ?></th>
            <td><?= h($tbUsuario->nm_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Senha') ?></th>
            <td><?= h($tbUsuario->cd_senha) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Usuario') ?></th>
            <td><?= $this->Number->format($tbUsuario->cd_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Nascimento') ?></th>
            <td><?= h($tbUsuario->dt_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Cadastro') ?></th>
            <td><?= h($tbUsuario->dt_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Ultimo Acesso') ?></th>
            <td><?= h($tbUsuario->dt_ultimo_acesso) ?></td>
        </tr>
        <tr>
            <th><?= __('Ic Nivel') ?></th>
            <td><?= $tbUsuario->ic_nivel ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $tbUsuario->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

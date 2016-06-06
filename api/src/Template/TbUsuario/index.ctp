<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUsuario index large-9 medium-8 columns content">
    <h3><?= __('Tb Usuario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_usuario') ?></th>
                <th><?= $this->Paginator->sort('nm_usuario') ?></th>
                <th><?= $this->Paginator->sort('dt_nascimento') ?></th>
                <th><?= $this->Paginator->sort('ic_sexo') ?></th>
                <th><?= $this->Paginator->sort('nm_email') ?></th>
                <th><?= $this->Paginator->sort('cd_senha') ?></th>
                <th><?= $this->Paginator->sort('dt_cadastro') ?></th>
                <th><?= $this->Paginator->sort('dt_ultimo_acesso') ?></th>
                <th><?= $this->Paginator->sort('ic_nivel') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbUsuario as $tbUsuario): ?>
            <tr>
                <td><?= $this->Number->format($tbUsuario->cd_usuario) ?></td>
                <td><?= h($tbUsuario->nm_usuario) ?></td>
                <td><?= h($tbUsuario->dt_nascimento) ?></td>
                <td><?= h($tbUsuario->ic_sexo) ?></td>
                <td><?= h($tbUsuario->nm_email) ?></td>
                <td><?= h($tbUsuario->cd_senha) ?></td>
                <td><?= h($tbUsuario->dt_cadastro) ?></td>
                <td><?= h($tbUsuario->dt_ultimo_acesso) ?></td>
                <td><?= h($tbUsuario->ic_nivel) ?></td>
                <td><?= h($tbUsuario->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbUsuario->cd_usuario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbUsuario->cd_usuario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbUsuario->cd_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->cd_usuario)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Endereco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbEndereco index large-9 medium-8 columns content">
    <h3><?= __('Tb Endereco') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_endereco') ?></th>
                <th><?= $this->Paginator->sort('cd_instituicao') ?></th>
                <th><?= $this->Paginator->sort('cd_cep') ?></th>
                <th><?= $this->Paginator->sort('nm_endereco') ?></th>
                <th><?= $this->Paginator->sort('nm_numero') ?></th>
                <th><?= $this->Paginator->sort('nm_complemento') ?></th>
                <th><?= $this->Paginator->sort('cd_bairro') ?></th>
                <th><?= $this->Paginator->sort('cd_usuario') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbEndereco as $tbEndereco): ?>
            <tr>
                <td><?= $this->Number->format($tbEndereco->cd_endereco) ?></td>
                <td><?= $this->Number->format($tbEndereco->cd_instituicao) ?></td>
                <td><?= h($tbEndereco->cd_cep) ?></td>
                <td><?= h($tbEndereco->nm_endereco) ?></td>
                <td><?= h($tbEndereco->nm_numero) ?></td>
                <td><?= h($tbEndereco->nm_complemento) ?></td>
                <td><?= $this->Number->format($tbEndereco->cd_bairro) ?></td>
                <td><?= $this->Number->format($tbEndereco->cd_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbEndereco->cd_endereco]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbEndereco->cd_endereco]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbEndereco->cd_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $tbEndereco->cd_endereco)]) ?>
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

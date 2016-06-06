<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Bairro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbBairro index large-9 medium-8 columns content">
    <h3><?= __('Tb Bairro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_bairro') ?></th>
                <th><?= $this->Paginator->sort('nm_bairro') ?></th>
                <th><?= $this->Paginator->sort('cd_cidade') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbBairro as $tbBairro): ?>
            <tr>
                <td><?= $this->Number->format($tbBairro->cd_bairro) ?></td>
                <td><?= h($tbBairro->nm_bairro) ?></td>
                <td><?= $this->Number->format($tbBairro->cd_cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbBairro->cd_bairro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbBairro->cd_bairro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbBairro->cd_bairro], ['confirm' => __('Are you sure you want to delete # {0}?', $tbBairro->cd_bairro)]) ?>
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

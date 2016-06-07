<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbProduto index large-9 medium-8 columns content">
    <h3><?= __('Tb Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_produto') ?></th>
                <th><?= $this->Paginator->sort('cd_categoria') ?></th>
                <th><?= $this->Paginator->sort('nm_produto') ?></th>
                <th><?= $this->Paginator->sort('ds_produto') ?></th>
                <th><?= $this->Paginator->sort('qt_produto') ?></th>
                <th><?= $this->Paginator->sort('cd_doacao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbProduto as $tbProduto): ?>
            <tr>
                <td><?= $this->Number->format($tbProduto->cd_produto) ?></td>
                <td><?= $this->Number->format($tbProduto->cd_categoria) ?></td>
                <td><?= h($tbProduto->nm_produto) ?></td>
                <td><?= h($tbProduto->ds_produto) ?></td>
                <td><?= $this->Number->format($tbProduto->qt_produto) ?></td>
                <td><?= $this->Number->format($tbProduto->cd_doacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbProduto->cd_produto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbProduto->cd_produto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbProduto->cd_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $tbProduto->cd_produto)]) ?>
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

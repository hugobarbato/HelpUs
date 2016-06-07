<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Categoria Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbCategoriaProduto index large-9 medium-8 columns content">
    <h3><?= __('Tb Categoria Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_categoria_produto') ?></th>
                <th><?= $this->Paginator->sort('nm_categoria_produto') ?></th>
                <th><?= $this->Paginator->sort('sg_categoria_produto') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbCategoriaProduto as $tbCategoriaProduto): ?>
            <tr>
                <td><?= $this->Number->format($tbCategoriaProduto->cd_categoria_produto) ?></td>
                <td><?= h($tbCategoriaProduto->nm_categoria_produto) ?></td>
                <td><?= h($tbCategoriaProduto->sg_categoria_produto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbCategoriaProduto->cd_categoria_produto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbCategoriaProduto->cd_categoria_produto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbCategoriaProduto->cd_categoria_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCategoriaProduto->cd_categoria_produto)]) ?>
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

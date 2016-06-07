<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Produto'), ['action' => 'edit', $tbProduto->cd_produto]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Produto'), ['action' => 'delete', $tbProduto->cd_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $tbProduto->cd_produto)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbProduto view large-9 medium-8 columns content">
    <h3><?= h($tbProduto->cd_produto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Produto') ?></th>
            <td><?= h($tbProduto->nm_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Ds Produto') ?></th>
            <td><?= h($tbProduto->ds_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Produto') ?></th>
            <td><?= $this->Number->format($tbProduto->cd_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Categoria') ?></th>
            <td><?= $this->Number->format($tbProduto->cd_categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Qt Produto') ?></th>
            <td><?= $this->Number->format($tbProduto->qt_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Doacao') ?></th>
            <td><?= $this->Number->format($tbProduto->cd_doacao) ?></td>
        </tr>
    </table>
</div>

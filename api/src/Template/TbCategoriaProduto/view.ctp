<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Categoria Produto'), ['action' => 'edit', $tbCategoriaProduto->cd_categoria_produto]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Categoria Produto'), ['action' => 'delete', $tbCategoriaProduto->cd_categoria_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCategoriaProduto->cd_categoria_produto)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Categoria Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Categoria Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbCategoriaProduto view large-9 medium-8 columns content">
    <h3><?= h($tbCategoriaProduto->cd_categoria_produto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Categoria Produto') ?></th>
            <td><?= h($tbCategoriaProduto->nm_categoria_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Sg Categoria Produto') ?></th>
            <td><?= h($tbCategoriaProduto->sg_categoria_produto) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Categoria Produto') ?></th>
            <td><?= $this->Number->format($tbCategoriaProduto->cd_categoria_produto) ?></td>
        </tr>
    </table>
</div>

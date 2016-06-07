<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Img Produto'), ['action' => 'edit', $tbImgProduto->cd_img]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Img Produto'), ['action' => 'delete', $tbImgProduto->cd_img], ['confirm' => __('Are you sure you want to delete # {0}?', $tbImgProduto->cd_img)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Img Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Img Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbImgProduto view large-9 medium-8 columns content">
    <h3><?= h($tbImgProduto->cd_img) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Endereco') ?></th>
            <td><?= h($tbImgProduto->nm_endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Extensao') ?></th>
            <td><?= h($tbImgProduto->nm_extensao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Img') ?></th>
            <td><?= $this->Number->format($tbImgProduto->cd_img) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Produto') ?></th>
            <td><?= $this->Number->format($tbImgProduto->cd_produto) ?></td>
        </tr>
    </table>
</div>

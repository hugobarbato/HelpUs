<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Img Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbImgProduto index large-9 medium-8 columns content">
    <h3><?= __('Tb Img Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_img') ?></th>
                <th><?= $this->Paginator->sort('nm_endereco') ?></th>
                <th><?= $this->Paginator->sort('nm_extensao') ?></th>
                <th><?= $this->Paginator->sort('cd_produto') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbImgProduto as $tbImgProduto): ?>
            <tr>
                <td><?= $this->Number->format($tbImgProduto->cd_img) ?></td>
                <td><?= h($tbImgProduto->nm_endereco) ?></td>
                <td><?= h($tbImgProduto->nm_extensao) ?></td>
                <td><?= $this->Number->format($tbImgProduto->cd_produto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbImgProduto->cd_img]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbImgProduto->cd_img]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbImgProduto->cd_img], ['confirm' => __('Are you sure you want to delete # {0}?', $tbImgProduto->cd_img)]) ?>
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

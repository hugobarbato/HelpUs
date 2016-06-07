<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbCategoriaProduto->cd_categoria_produto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbCategoriaProduto->cd_categoria_produto)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Categoria Produto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbCategoriaProduto form large-9 medium-8 columns content">
    <?= $this->Form->create($tbCategoriaProduto) ?>
    <fieldset>
        <legend><?= __('Edit Tb Categoria Produto') ?></legend>
        <?php
            echo $this->Form->input('nm_categoria_produto');
            echo $this->Form->input('sg_categoria_produto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

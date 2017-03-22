<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Categoria Instituicao'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbCategoriaInstituicao form large-9 medium-8 columns content">
    <?= $this->Form->create($tbCategoriaInstituicao) ?>
    <fieldset>
        <legend><?= __('Add Tb Categoria Instituicao') ?></legend>
        <?php
            echo $this->Form->input('nm_categoria_instituicao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

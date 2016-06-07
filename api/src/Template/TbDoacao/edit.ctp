<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbDoacao->cd_doacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbDoacao->cd_doacao)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Doacao'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbDoacao form large-9 medium-8 columns content">
    <?= $this->Form->create($tbDoacao) ?>
    <fieldset>
        <legend><?= __('Edit Tb Doacao') ?></legend>
        <?php
            echo $this->Form->input('dt_fornecimento_doacao');
            echo $this->Form->input('ic_ofertado');
            echo $this->Form->input('dt_recebimento_doacao', ['empty' => true]);
            echo $this->Form->input('cd_instituicao');
            echo $this->Form->input('cd_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

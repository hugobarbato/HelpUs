<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Categoria Instituicao'), ['action' => 'edit', $tbCategoriaInstituicao->cd_categoria_instituicao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Categoria Instituicao'), ['action' => 'delete', $tbCategoriaInstituicao->cd_categoria_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCategoriaInstituicao->cd_categoria_instituicao)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Categoria Instituicao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Categoria Instituicao'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbCategoriaInstituicao view large-9 medium-8 columns content">
    <h3><?= h($tbCategoriaInstituicao->cd_categoria_instituicao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Categoria Instituicao') ?></th>
            <td><?= h($tbCategoriaInstituicao->nm_categoria_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Categoria Instituicao') ?></th>
            <td><?= $this->Number->format($tbCategoriaInstituicao->cd_categoria_instituicao) ?></td>
        </tr>
    </table>
</div>

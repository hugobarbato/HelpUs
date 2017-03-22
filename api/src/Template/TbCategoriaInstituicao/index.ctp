<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Categoria Instituicao'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbCategoriaInstituicao index large-9 medium-8 columns content">
    <h3><?= __('Tb Categoria Instituicao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_categoria_instituicao') ?></th>
                <th><?= $this->Paginator->sort('nm_categoria_instituicao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbCategoriaInstituicao as $tbCategoriaInstituicao): ?>
            <tr>
                <td><?= $this->Number->format($tbCategoriaInstituicao->cd_categoria_instituicao) ?></td>
                <td><?= h($tbCategoriaInstituicao->nm_categoria_instituicao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbCategoriaInstituicao->cd_categoria_instituicao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbCategoriaInstituicao->cd_categoria_instituicao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbCategoriaInstituicao->cd_categoria_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCategoriaInstituicao->cd_categoria_instituicao)]) ?>
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

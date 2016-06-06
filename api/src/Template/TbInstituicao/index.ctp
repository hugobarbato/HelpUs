<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Instituicao'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbInstituicao index large-9 medium-8 columns content">
    <h3><?= __('Tb Instituicao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_instituicao') ?></th>
                <th><?= $this->Paginator->sort('nm_instituicao') ?></th>
                <th><?= $this->Paginator->sort('ds_instituicao') ?></th>
                <th><?= $this->Paginator->sort('cd_cnpj') ?></th>
                <th><?= $this->Paginator->sort('cd_categoria') ?></th>
                <th><?= $this->Paginator->sort('cd_logo') ?></th>
                <th><?= $this->Paginator->sort('cd_bg') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbInstituicao as $tbInstituicao): ?>
            <tr>
                <td><?= $this->Number->format($tbInstituicao->cd_instituicao) ?></td>
                <td><?= h($tbInstituicao->nm_instituicao) ?></td>
                <td><?= h($tbInstituicao->ds_instituicao) ?></td>
                <td><?= h($tbInstituicao->cd_cnpj) ?></td>
                <td><?= $this->Number->format($tbInstituicao->cd_categoria) ?></td>
                <td><?= $this->Number->format($tbInstituicao->cd_logo) ?></td>
                <td><?= $this->Number->format($tbInstituicao->cd_bg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbInstituicao->cd_instituicao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbInstituicao->cd_instituicao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbInstituicao->cd_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $tbInstituicao->cd_instituicao)]) ?>
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

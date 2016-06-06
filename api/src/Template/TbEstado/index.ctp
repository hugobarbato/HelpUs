<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Estado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbEstado index large-9 medium-8 columns content">
    <h3><?= __('Tb Estado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_estado') ?></th>
                <th><?= $this->Paginator->sort('nm_estado') ?></th>
                <th><?= $this->Paginator->sort('sg_estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbEstado as $tbEstado): ?>
            <tr>
                <td><?= $this->Number->format($tbEstado->cd_estado) ?></td>
                <td><?= h($tbEstado->nm_estado) ?></td>
                <td><?= h($tbEstado->sg_estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbEstado->cd_estado]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbEstado->cd_estado]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbEstado->cd_estado], ['confirm' => __('Are you sure you want to delete # {0}?', $tbEstado->cd_estado)]) ?>
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

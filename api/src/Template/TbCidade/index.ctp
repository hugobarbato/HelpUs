<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Cidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbCidade index large-9 medium-8 columns content">
    <h3><?= __('Tb Cidade') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_cidade') ?></th>
                <th><?= $this->Paginator->sort('nm_cidade') ?></th>
                <th><?= $this->Paginator->sort('cd_estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbCidade as $tbCidade): ?>
            <tr>
                <td><?= $this->Number->format($tbCidade->cd_cidade) ?></td>
                <td><?= h($tbCidade->nm_cidade) ?></td>
                <td><?= $this->Number->format($tbCidade->cd_estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbCidade->cd_cidade]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbCidade->cd_cidade]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbCidade->cd_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCidade->cd_cidade)]) ?>
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

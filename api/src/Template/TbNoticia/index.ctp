<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Noticium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbNoticia index large-9 medium-8 columns content">
    <h3><?= __('Tb Noticia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_noticia') ?></th>
                <th><?= $this->Paginator->sort('nm_titulo_noticia') ?></th>
                <th><?= $this->Paginator->sort('nm_subtitulo_noticia') ?></th>
                <th><?= $this->Paginator->sort('ds_noticia') ?></th>
                <th><?= $this->Paginator->sort('nm_tags') ?></th>
                <th><?= $this->Paginator->sort('nm_local') ?></th>
                <th><?= $this->Paginator->sort('dt_noticia') ?></th>
                <th><?= $this->Paginator->sort('cd_instituicao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbNoticia as $tbNoticium): ?>
            <tr>
                <td><?= $this->Number->format($tbNoticium->cd_noticia) ?></td>
                <td><?= h($tbNoticium->nm_titulo_noticia) ?></td>
                <td><?= h($tbNoticium->nm_subtitulo_noticia) ?></td>
                <td><?= h($tbNoticium->ds_noticia) ?></td>
                <td><?= h($tbNoticium->nm_tags) ?></td>
                <td><?= h($tbNoticium->nm_local) ?></td>
                <td><?= h($tbNoticium->dt_noticia) ?></td>
                <td><?= $this->Number->format($tbNoticium->cd_instituicao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbNoticium->cd_noticia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbNoticium->cd_noticia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbNoticium->cd_noticia], ['confirm' => __('Are you sure you want to delete # {0}?', $tbNoticium->cd_noticia)]) ?>
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

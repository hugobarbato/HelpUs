<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Midia Noticium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbMidiaNoticia index large-9 medium-8 columns content">
    <h3><?= __('Tb Midia Noticia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cd_imgaem_noticia') ?></th>
                <th><?= $this->Paginator->sort('nm_endereco') ?></th>
                <th><?= $this->Paginator->sort('nm_extensao') ?></th>
                <th><?= $this->Paginator->sort('cd_noticia') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbMidiaNoticia as $tbMidiaNoticium): ?>
            <tr>
                <td><?= $this->Number->format($tbMidiaNoticium->cd_imgaem_noticia) ?></td>
                <td><?= h($tbMidiaNoticium->nm_endereco) ?></td>
                <td><?= h($tbMidiaNoticium->nm_extensao) ?></td>
                <td><?= $this->Number->format($tbMidiaNoticium->cd_noticia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbMidiaNoticium->cd_imgaem_noticia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbMidiaNoticium->cd_imgaem_noticia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbMidiaNoticium->cd_imgaem_noticia], ['confirm' => __('Are you sure you want to delete # {0}?', $tbMidiaNoticium->cd_imgaem_noticia)]) ?>
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

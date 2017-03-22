<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Midia Noticium'), ['action' => 'edit', $tbMidiaNoticium->cd_imgaem_noticia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Midia Noticium'), ['action' => 'delete', $tbMidiaNoticium->cd_imgaem_noticia], ['confirm' => __('Are you sure you want to delete # {0}?', $tbMidiaNoticium->cd_imgaem_noticia)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Midia Noticia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Midia Noticium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbMidiaNoticia view large-9 medium-8 columns content">
    <h3><?= h($tbMidiaNoticium->cd_imgaem_noticia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Endereco') ?></th>
            <td><?= h($tbMidiaNoticium->nm_endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Extensao') ?></th>
            <td><?= h($tbMidiaNoticium->nm_extensao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Imgaem Noticia') ?></th>
            <td><?= $this->Number->format($tbMidiaNoticium->cd_imgaem_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Noticia') ?></th>
            <td><?= $this->Number->format($tbMidiaNoticium->cd_noticia) ?></td>
        </tr>
    </table>
</div>

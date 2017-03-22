<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Noticium'), ['action' => 'edit', $tbNoticium->cd_noticia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Noticium'), ['action' => 'delete', $tbNoticium->cd_noticia], ['confirm' => __('Are you sure you want to delete # {0}?', $tbNoticium->cd_noticia)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Noticia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Noticium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbNoticia view large-9 medium-8 columns content">
    <h3><?= h($tbNoticium->cd_noticia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Titulo Noticia') ?></th>
            <td><?= h($tbNoticium->nm_titulo_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Subtitulo Noticia') ?></th>
            <td><?= h($tbNoticium->nm_subtitulo_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Ds Noticia') ?></th>
            <td><?= h($tbNoticium->ds_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Tags') ?></th>
            <td><?= h($tbNoticium->nm_tags) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Local') ?></th>
            <td><?= h($tbNoticium->nm_local) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Noticia') ?></th>
            <td><?= $this->Number->format($tbNoticium->cd_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Instituicao') ?></th>
            <td><?= $this->Number->format($tbNoticium->cd_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Noticia') ?></th>
            <td><?= h($tbNoticium->dt_noticia) ?></td>
        </tr>
    </table>
</div>

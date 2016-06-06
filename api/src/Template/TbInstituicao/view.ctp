<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Instituicao'), ['action' => 'edit', $tbInstituicao->cd_instituicao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Instituicao'), ['action' => 'delete', $tbInstituicao->cd_instituicao], ['confirm' => __('Are you sure you want to delete # {0}?', $tbInstituicao->cd_instituicao)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Instituicao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Instituicao'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbInstituicao view large-9 medium-8 columns content">
    <h3><?= h($tbInstituicao->cd_instituicao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Instituicao') ?></th>
            <td><?= h($tbInstituicao->nm_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Ds Instituicao') ?></th>
            <td><?= h($tbInstituicao->ds_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Cnpj') ?></th>
            <td><?= h($tbInstituicao->cd_cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Instituicao') ?></th>
            <td><?= $this->Number->format($tbInstituicao->cd_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Categoria') ?></th>
            <td><?= $this->Number->format($tbInstituicao->cd_categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Logo') ?></th>
            <td><?= $this->Number->format($tbInstituicao->cd_logo) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Bg') ?></th>
            <td><?= $this->Number->format($tbInstituicao->cd_bg) ?></td>
        </tr>
    </table>
</div>

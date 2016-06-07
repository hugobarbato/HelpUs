<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Doacao'), ['action' => 'edit', $tbDoacao->cd_doacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Doacao'), ['action' => 'delete', $tbDoacao->cd_doacao], ['confirm' => __('Are you sure you want to delete # {0}?', $tbDoacao->cd_doacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Doacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Doacao'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbDoacao view large-9 medium-8 columns content">
    <h3><?= h($tbDoacao->cd_doacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ic Ofertado') ?></th>
            <td><?= h($tbDoacao->ic_ofertado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Doacao') ?></th>
            <td><?= $this->Number->format($tbDoacao->cd_doacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Instituicao') ?></th>
            <td><?= $this->Number->format($tbDoacao->cd_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Usuario') ?></th>
            <td><?= $this->Number->format($tbDoacao->cd_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Fornecimento Doacao') ?></th>
            <td><?= h($tbDoacao->dt_fornecimento_doacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Recebimento Doacao') ?></th>
            <td><?= h($tbDoacao->dt_recebimento_doacao) ?></td>
        </tr>
    </table>
</div>

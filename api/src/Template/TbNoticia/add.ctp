<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Noticia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbNoticia form large-9 medium-8 columns content">
    <?= $this->Form->create($tbNoticium) ?>
    <fieldset>
        <legend><?= __('Add Tb Noticium') ?></legend>
        <?php
            echo $this->Form->input('nm_titulo_noticia');
            echo $this->Form->input('nm_subtitulo_noticia');
            echo $this->Form->input('ds_noticia');
            echo $this->Form->input('nm_tags');
            echo $this->Form->input('nm_local');
            echo $this->Form->input('dt_noticia');
            echo $this->Form->input('cd_instituicao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

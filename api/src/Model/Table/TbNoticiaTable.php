<?php
namespace App\Model\Table;

use App\Model\Entity\TbNoticium;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbNoticia Model
 *
 */
class TbNoticiaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tb_noticia');
        $this->displayField('cd_noticia');
        $this->primaryKey('cd_noticia');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('cd_noticia')
            ->allowEmpty('cd_noticia', 'create');

        $validator
            ->requirePresence('nm_titulo_noticia', 'create')
            ->notEmpty('nm_titulo_noticia');

        $validator
            ->requirePresence('nm_subtitulo_noticia', 'create')
            ->notEmpty('nm_subtitulo_noticia');

        $validator
            ->requirePresence('ds_noticia', 'create')
            ->notEmpty('ds_noticia');

        $validator
            ->requirePresence('nm_tags', 'create')
            ->notEmpty('nm_tags');

        $validator
            ->requirePresence('nm_local', 'create')
            ->notEmpty('nm_local');

        $validator
            ->date('dt_noticia')
            ->requirePresence('dt_noticia', 'create')
            ->notEmpty('dt_noticia');

        $validator
            ->integer('cd_instituicao')
            ->requirePresence('cd_instituicao', 'create')
            ->notEmpty('cd_instituicao');

        return $validator;
    }
}

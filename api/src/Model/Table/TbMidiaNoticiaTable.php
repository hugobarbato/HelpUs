<?php
namespace App\Model\Table;

use App\Model\Entity\TbMidiaNoticium;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbMidiaNoticia Model
 *
 */
class TbMidiaNoticiaTable extends Table
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

        $this->table('tb_midia_noticia');
        $this->displayField('cd_imgaem_noticia');
        $this->primaryKey('cd_imgaem_noticia');
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
            ->integer('cd_imgaem_noticia')
            ->allowEmpty('cd_imgaem_noticia', 'create');

        $validator
            ->requirePresence('nm_endereco', 'create')
            ->notEmpty('nm_endereco');

        $validator
            ->requirePresence('nm_extensao', 'create')
            ->notEmpty('nm_extensao');

        $validator
            ->integer('cd_noticia')
            ->requirePresence('cd_noticia', 'create')
            ->notEmpty('cd_noticia');

        return $validator;
    }
}

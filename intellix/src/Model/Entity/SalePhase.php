<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalePhase Entity
 *
 * @property int $id
 * @property string $name_phase
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lead[] $leads
 */
class SalePhase extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name_phase' => true,
        'user_id' => true,
        'user' => true,
        'leads' => true
    ];
}

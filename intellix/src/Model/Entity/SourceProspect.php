<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SourceProspect Entity
 *
 * @property int $id
 * @property string $name_prospect
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Contact[] $contacts
 * @property \App\Model\Entity\Lead[] $leads
 * @property \App\Model\Entity\Prospect[] $prospects
 */
class SourceProspect extends Entity
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
        'name_prospect' => true,
        'user_id' => true,
        'user' => true,
        'contacts' => true,
        'leads' => true,
        'prospects' => true
    ];
}

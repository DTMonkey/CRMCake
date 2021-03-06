<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name_product
 * @property int $user_id
 * @property int $contacts_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Contact[] $contacts
 */
class Product extends Entity
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
        'name_product' => true,
        'user_id' => true,
        'contacts_id' => true,
        'user' => true,
        'contacts' => true
    ];
}

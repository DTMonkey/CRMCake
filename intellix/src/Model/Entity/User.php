<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity
{
    protected $_accessible = [
        'full_name' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'username' => true,
        'accounts' => true,
        'campaigns' => true,
        'contacts' => true,
        'leads' => true,
        'notes' => true,
        'paid_to' => true,
        'products' => true,
        'prospects' => true,
        'sale_phases' => true,
        'secteurs' => true,
        'source_prospects' => true,
        'status' => true,
        'types_contacts' => true,
        'types_leads' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
        }
    }
}

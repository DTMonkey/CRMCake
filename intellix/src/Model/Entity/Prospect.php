<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prospect Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property int $phone
 * @property string $society
 * @property int $mobile
 * @property string $email
 * @property string $web_site
 * @property string $city
 * @property int $fax
 * @property int $email_opt_out
 * @property string $title
 * @property string $other_sector
 * @property string $effective
 * @property string $secondary_email
 * @property string $pobox
 * @property string $wilaya
 * @property string $description
 * @property string $comments
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $source_prospect_id
 * @property int $statut_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SourceProspect $source_prospect
 * @property \App\Model\Entity\Status $status
 */
class Prospect extends Entity
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
        'name' => true,
        'first_name' => true,
        'phone' => true,
        'society' => true,
        'mobile' => true,
        'email' => true,
        'web_site' => true,
        'city' => true,
        'fax' => true,
        'email_opt_out' => true,
        'title' => true,
        'other_sector' => true,
        'effective' => true,
        'secondary_email' => true,
        'pobox' => true,
        'wilaya' => true,
        'description' => true,
        'comments' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'source_prospect_id' => true,
        'statut_id' => true,
        'user' => true,
        'source_prospect' => true,
        'status' => true
    ];
}

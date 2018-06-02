<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property string $name_account
 * @property int $phone
 * @property string $effective
 * @property string $other_email
 * @property int $email_opt_out
 * @property string $web_site
 * @property int $fax
 * @property int $other_phone
 * @property string $email
 * @property string $owner
 * @property string $code_ape
 * @property int $annual_revenue
 * @property int $notify_owner
 * @property string $billing_addres
 * @property string $delivery_address
 * @property string $description
 * @property string $comments
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $account_id
 * @property int $note_id
 * @property int $user_id
 * @property int $lead_id
 * @property int $contact_id
 * @property int $secteur_id
 *
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Note $note
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lead[] $leads
 * @property \App\Model\Entity\Contact[] $contacts
 * @property \App\Model\Entity\Secteur $secteur
 */
class Account extends Entity
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
        'name_account' => true,
        'phone' => true,
        'effective' => true,
        'other_email' => true,
        'email_opt_out' => true,
        'web_site' => true,
        'fax' => true,
        'other_phone' => true,
        'email' => true,
        'owner' => true,
        'code_ape' => true,
        'annual_revenue' => true,
        'notify_owner' => true,
        'billing_addres' => true,
        'delivery_address' => true,
        'description' => true,
        'comments' => true,
        'created' => true,
        'modified' => true,
        'account_id' => true,
        'note_id' => true,
        'user_id' => true,
        'lead_id' => true,
        'contact_id' => true,
        'secteur_id' => true,
        'accounts' => true,
        'note' => true,
        'user' => true,
        'leads' => true,
        'contacts' => true,
        'secteur' => true
    ];
}

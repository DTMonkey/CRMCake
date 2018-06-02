<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $mobile
 * @property int $other_phone
 * @property int $fax
 * @property int $do_not_call
 * @property string $interested_in
 * @property int $notify_owner
 * @property int $referent
 * @property string $first_name
 * @property string $entreprise
 * @property string $fonction
 * @property string $email
 * @property string $assistant
 * @property int $email_opt_out
 * @property int $client
 * @property int $service_portal_access
 * @property \Cake\I18n\FrozenTime $support_start_date
 * @property \Cake\I18n\FrozenTime $end_date_support
 * @property string $wilaya
 * @property string $city
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $contact_type_id
 * @property int $lead_id
 * @property int $source_prospect_id
 * @property int $account_id
 * @property int $statut_id
 * @property int $secteur_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Contact $contact
 * @property \App\Model\Entity\Lead[] $leads
 * @property \App\Model\Entity\SourceProspect $source_prospect
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Secteur $secteur
 * @property \App\Model\Entity\Product $product
 */
class Contact extends Entity
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
        'phone' => true,
        'mobile' => true,
        'other_phone' => true,
        'fax' => true,
        'do_not_call' => true,
        'interested_in' => true,
        'notify_owner' => true,
        'referent' => true,
        'first_name' => true,
        'entreprise' => true,
        'fonction' => true,
        'email' => true,
        'assistant' => true,
        'email_opt_out' => true,
        'client' => true,
        'service_portal_access' => true,
        'support_start_date' => true,
        'end_date_support' => true,
        'wilaya' => true,
        'city' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'contact_type_id' => true,
        'lead_id' => true,
        'source_prospect_id' => true,
        'account_id' => true,
        'statut_id' => true,
        'secteur_id' => true,
        'product_id' => true,
        'user' => true,
        'contact' => true,
        'leads' => true,
        'source_prospect' => true,
        'accounts' => true,
        'status' => true,
        'secteur' => true,
        'product' => true
    ];
}

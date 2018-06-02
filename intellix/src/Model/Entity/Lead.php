<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lead Entity
 *
 * @property int $id
 * @property string $name_lead
 * @property int $forcecast_amount
 * @property \Cake\I18n\FrozenDate $term
 * @property string $next
 * @property float $probability
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $sale_phase_id
 * @property int $campaign_id
 * @property int $user_id
 * @property int $account_id
 * @property int $contact_id
 * @property int $paid_to_id
 * @property int $secteur_id
 * @property int $lead_type_id
 * @property int $source_prospect_id
 *
 * @property \App\Model\Entity\SalePhase $sale_phase
 * @property \App\Model\Entity\Campaign $campaign
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Contact[] $contacts
 * @property \App\Model\Entity\PaidTo $paid_to
 * @property \App\Model\Entity\Secteur $secteur
 * @property \App\Model\Entity\Lead $lead
 * @property \App\Model\Entity\SourceProspect $source_prospect
 */
class Lead extends Entity
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
        'name_lead' => true,
        'forcecast_amount' => true,
        'term' => true,
        'next' => true,
        'probability' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'sale_phase_id' => true,
        'campaign_id' => true,
        'user_id' => true,
        'account_id' => true,
        'contact_id' => true,
        'paid_to_id' => true,
        'secteur_id' => true,
        'lead_type_id' => true,
        'source_prospect_id' => true,
        'sale_phase' => true,
        'campaign' => true,
        'user' => true,
        'accounts' => true,
        'contacts' => true,
        'paid_to' => true,
        'secteur' => true,
        'lead' => true,
        'source_prospect' => true
    ];
}

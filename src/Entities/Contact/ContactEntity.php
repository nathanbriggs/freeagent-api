<?php

namespace CloudManaged\FreeAgent\Entities\Contact;

/**
 * Class Contact
 *
 * organisation_name (Required if either first_name or last_name are empty)
 * first_name (Required if organisation_name is empty)
 * last_name (Required if organisation_name is empty)
 * email
 * phone_number
 * address1
 * town
 * region
 * postcode
 * address2
 * address3
 * contact_name_on_invoices
 * country
 * sales_tax_registration_number
 * uses_contact_invoice_sequence
 *
 * @package CloudManaged\FreeAgent\Entities\Contact
 */
class ContactEntity extends AbstractEntity implements EntityInterface
{
    protected $organisation_name;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $phone_number;
    protected $address1;
    protected $town;
    protected $region;
    protected $postcode;
    protected $address2;
    protected $address3;
    protected $contact_name_on_invoices;
    protected $country;
    protected $sales_tax_registration_number;
    protected $uses_contact_invoice_sequence;

    public function __construct(array $attributes)
    {
        $this->organisation_name             = isset( $attributes['organisation_name'] ) ? $attributes['organisation_name'] : null;
        $this->first_name                    = isset( $attributes['first_name'] ) ? $attributes['first_name'] : null;
        $this->last_name                     = isset( $attributes['last_name'] ) ? $attributes['last_name'] : null;
        $this->email                         = $attributes['email'];
        $this->phone_number                  = $attributes['phone_number'];
        $this->address1                      = $attributes['address1'];
        $this->town                          = $attributes['town'];
        $this->region                        = $attributes['region'];
        $this->postcode                      = $attributes['postcode'];
        $this->address2                      = $attributes['address2'];
        $this->address3                      = $attributes['address3'];
        $this->contact_name_on_invoices      = $attributes['contact_name_on_invoices'];
        $this->country                       = $attributes['country'];
        $this->sales_tax_registration_number = $attributes['sales_tax_registration_number'];
        $this->uses_contact_invoice_sequence = $attributes['uses_contact_invoice_sequence'];
    }

    public function toArray()
    {
        return compact(array_keys(get_defined_vars()));
    }

    public function __toString()
    {
        if (isset($this->organisation_name)) {
            return $this->organisation_name;
        }

        return $this->first_name . ' ' . $this->last_name;
    }
}

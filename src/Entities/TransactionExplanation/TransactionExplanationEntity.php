<?php

namespace CloudManaged\FreeAgent\Entities\TransactionExplanation;

/**
 * Class Transaction Explanation
 *
 * bank_account (Either bank_account or bank_transaction is required)
 * bank_transaction (Either bank_account or bank_transaction is required)
 * dated_on (Required)
 * manual_sales_tax_amount
 * description
 * gross_value
 * foreign_currency_value
 * rebill_type
 * rebill_factor
 * category
 * paid_invoice (Required when paying an invoice)
 * paid_bill (Required when paying a bill receipt)
 * paid_user (Required when paying a user)
 * transfer_bank_account (Required when transferring money between accounts)
 * asset_life_years (Required for capital asset purchase. The integer number of years over which the asset should be depreciated.)
 * attachment Hash
 *      data must contain the binary data of the file being attached, encoded as Base64.
 *      file_name
 *      description
 *      content_type can be one of the following:
 *          image/png
 *          image/x-png
 *          image/jpeg
 *          image/jpg
 *          image/gif
 *          application/x-pdf
 *
 * @package CloudManaged\FreeAgent\Entities\TransactionExplanation
 */
class TransactionExplanationEntity extends AbstractEntity implements EntityInterface
{
    protected $bank_account;
    protected $bank_transaction;
    protected $dated_on;
    protected $manual_sales_tax_amount;
    protected $description;
    protected $gross_value;
    protected $foreign_currency_value;
    protected $rebill_type;
    protected $rebill_factor;
    protected $category;
    protected $paid_invoice;
    protected $paid_bill;
    protected $paid_user;
    protected $transfer_bank_account;
    protected $asset_life_years;
    protected $attachment;

    public function __construct(array $attributes = null)
    {
        if (isset($attributes)) {
            $this->bank_account            = $attributes['bank_account'];
            $this->bank_transaction        = $attributes['bank_transaction'];
            $this->dated_on                = $attributes['dated_on'];
            $this->manual_sales_tax_amount = $attributes['manual_sales_tax_amount'];
            $this->description             = $attributes['description'];
            $this->gross_value             = $attributes['gross_value'];
            $this->foreign_currency_value  = $attributes['foreign_currency_value'];
            $this->rebill_type             = $attributes['rebill_type'];
            $this->rebill_factor           = $attributes['rebill_factor'];
            $this->category                = $attributes['category'];
            $this->paid_invoice            = $attributes['paid_invoice'];
            $this->paid_bill               = $attributes['paid_bill'];
            $this->paid_user               = $attributes['paid_user'];
            $this->transfer_bank_account   = $attributes['transfer_bank_account'];
            $this->asset_life_years        = $attributes['asset_life_years'];
            $this->attachment              = $attributes['attachment'];
        }
    }

    public function toArray()
    {
        return compact(array_keys(get_defined_vars()));
    }

    public function __toString()
    {
        return !empty($this->bank_transaction) ? $this->bank_transaction : $this->bank_account;
    }
}

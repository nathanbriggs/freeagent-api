<?php

namespace CloudManaged\FreeAgent\Entities\Invoice;

/**
 * Class Invoice
 *
 * reference (Optional, If omitted next invoice reference will be used)
 * contact (Required)
 * project
 * comments (Optional, this is called "Additional Text" in the UI)
 * discount_percent
 * dated_on (Required)
 * due_on
 * payment_terms_in_days (Required)
 * currency
 * ec_status
 *      Non-EC
 *      EC Goods
 *      EC Services
 * written_off_date (Required if invoice status is Cancelled)
 * invoice_items (Array)
 *      invoice_item (Hash)
 *      position
 *      item_type (Required, if invoice_item is given) can be one of the following:
 *          Hours
 *          Days
 *          Weeks
 *          Months
 *          Years
 *          Products
 *          Services
 *          Training
 *          Expenses
 *          Comment
 *          Bills
 *          Discount
 *          Credit
 *          VAT
 *      quantity
 *      price (Required, if invoice_item is given and item_type is non time based)
 *      description (Required, if invoice_item is given)
 *      sales_tax_rate
 *      second_sales_tax_rate
 *      category (optional)
 *
 * @package CloudManaged\FreeAgent\Entities\Invoice
 */
class InvoiceEntity extends AbstractEntity implements EntityInterface
{
    protected $reference;
    protected $contact;
    protected $project;
    protected $comments;
    protected $discount_percent;
    protected $dated_on;
    protected $exchange_rate;
    protected $payment_terms_in_days;
    protected $currency;
    protected $ec_status;
    protected $written_off_date;
    protected $invoice_items;

    public function __construct(array $attributes)
    {
        $this->reference             = $attributes['reference'];
        $this->contact               = $attributes['contact'];
        $this->project               = $attributes['project'];
        $this->comments              = $attributes['comments'];
        $this->discount_percent      = $attributes['discount_percent'];
        $this->dated_on              = $attributes['dated_on'];
        $this->payment_terms_in_days = $attributes['payment_terms_in_days'];
        $this->currency              = $attributes['currency'];
        $this->ec_status             = $attributes['ec_status'];
        $this->written_off_date      = $attributes['written_off_date'];
        $this->invoice_items         = $attributes['invoice_items'];
    }

    public function toArray()
    {
        return compact(array_keys(get_defined_vars()));
    }

    public function __toString()
    {
        return $this->reference;
    }
}

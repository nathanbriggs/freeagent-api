<?php

namespace CloudManaged\FreeAgent\Entities\Invoice;

/**
 * Class InvoiceItem
 *
 * position
 * item_type (Required, if invoice_item is given) can be one of the following:
 *     Hours
 *     Days
 *     Weeks
 *     Months
 *     Years
 *     Products
 *     Services
 *     Training
 *     Expenses
 *     Comment
 *     Bills
 *     Discount
 *     Credit
 *     VAT
 * quantity
 * price (Required, if invoice_item is given and item_type is non time based)
 * description (Required, if invoice_item is given)
 * sales_tax_rate
 * second_sales_tax_rate
 * category (optional)
 *
 * @package CloudManaged\FreeAgent\Entities\Invoice
 */
class InvoiceItem
{
    public $position;
    public $item_type;
    public $quantity;
    public $price;
    public $description;
    public $sales_tax_rate;
    public $second_sales_tax_rate;
    public $category;

    public function __construct(array $attributes)
    {
        $this->position              = $attributes['position'];
        $this->item_type             = $attributes['item_type'];
        $this->quantity              = $attributes['quantity'];
        $this->price                 = $attributes['price'];
        $this->description           = $attributes['description'];
        $this->sales_tax_rate        = $attributes['sales_tax_rate'];
        $this->second_sales_tax_rate = $attributes['second_sales_tax_rate'];
        $this->category              = $attributes['category'];
    }

    public function toArray()
    {
        return compact(array_keys(get_defined_vars()));
    }
}

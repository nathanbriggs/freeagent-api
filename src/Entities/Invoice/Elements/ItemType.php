<?php

namespace CloudManaged\FreeAgent\Entities\Invoice;

abstract class ItemType
{
    const HOURS    = 'Hours';
    const DAYS     = 'Days';
    const WEEKS    = 'Weeks';
    const MONTHS   = 'Months';
    const YEARS    = 'Years';
    const PRODUCTS = 'Products';
    const SERVICES = 'Services';
    const TRAINING = 'Training';
    const EXPENSES = 'Expenses';
    const COMMENT  = 'Comment';
    const BILLS    = 'Bills';
    const DISCOUNT = 'Discount';
    const CREDIT   = 'Credit';
    const VAT      = 'VAT';
}

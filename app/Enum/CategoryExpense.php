<?php

namespace App\Enum;

enum CategoryExpense: string
{
    case FOOD = 'food';
    case TRANSPORT = 'transport';
    case ENTERTAINMENT = "entertainment";
    case BILLS = "bills";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Enum\CategoryExpense;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OneTimeExpense extends Model
{
    //

    protected $table = 'one_time_expense';

    protected $fillable = [
        "name",
        "category",
        "amount",
        "user_id",
    ];

    protected $casts = [
        'category' => CategoryExpense::class,
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class OneTimeExpense extends Model
{
    //

    protected $fillable = [
        "name",
        "category",
        "amount"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

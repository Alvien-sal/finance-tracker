<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RecurringExpense extends Model
{
    //

    public function create(){

        return view();

    }

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

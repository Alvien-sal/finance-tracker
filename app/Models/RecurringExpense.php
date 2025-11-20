<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecurringExpense extends Model
{
    //

    public function create(){

        return view();

    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

}

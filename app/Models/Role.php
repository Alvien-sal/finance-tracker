<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enum\UserRole;

class Role extends Model
{
    
    protected $fillable = [
        "user_id",
        "role"
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function cast(){
        return [
            'role'=> UserRole::class,
        ];
    }
}

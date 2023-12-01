<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fennelucky extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public static function fromRequestInput(array $data)
    {
        return self::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

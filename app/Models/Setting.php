<?php

namespace App\Models;

use App\Enums\SettingGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;

    protected $fillable = ['key', 'name', 'value', 'details', 'type', 'order', 'group'];
    public $timestamps = false;

    protected function value(): Attribute
    {
        return Attribute::make(
            get: function ($value): mixed {
                return match ($this->attributes['type']) {
                    'int' => intval($value),
                    'float' => floatval($value),
                    'bool' => boolval($value),
                    'json' => json_decode($value, true),
                    default => $value
                };
            }
        );
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'key' => 'string',
            'name' => 'string',
            'details' => 'string',
            'type' => 'string',
            'order' => 'int',
            'group' => SettingGroup::class
        ];
    }
}

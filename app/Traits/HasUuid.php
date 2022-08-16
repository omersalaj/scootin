<?php
/** @noinspection PhpUnused */

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }

    /** @noinspection PhpUnused */
    public static function booted(): void
    {
        /** @noinspection PhpAccessingStaticMembersOnTraitInspection */
        static::creating(static function (Model $model) {
            $model->setAttribute('uuid', Str::uuid());
        });
    }
}


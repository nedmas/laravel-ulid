<?php namespace Nedmas\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Ulid\Ulid;

trait GeneratesUlid
{
    public static function bootGeneratesUlid(): void
    {
        static::creating(function (Model $model) {
            $ulid = $model->resolveUuid();
            if (isset($model->attributes[$model->ulidColumn()]) && !is_null($model->attributes[$model->ulidColumn()])) {
                $ulid = $ulid->fromString(strtolower($model->attributes[$model->ulidColumn()]), true);
            }
            $model->attributes[$model->ulidColumn()] = (string)$ulid;
        });
    }

    public function ulidColumn(): string
    {
        return 'ulid';
    }

    public function resolveUuid(): Ulid
    {
        return Ulid::generate(true);
    }

    public function scopeWhereUlid(Builder $query, $ulid): Builder
    {
        return $query->where($this->ulidColumn(), '=', $ulid);
    }
}

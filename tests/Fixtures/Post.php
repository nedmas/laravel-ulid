<?php namespace Nedmas\Concerns\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use Nedmas\Concerns\GeneratesUlid;

class Post extends Model
{
    use GeneratesUlid;

    protected $guarded = [];
}

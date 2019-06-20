<?php namespace Nedmas\Concerns\Tests\Fixtures;

class PostWithCustomUlidColumn extends Post
{
    protected $table = 'posts';

    public function ulidColumn(): string
    {
        return 'custom';
    }
}

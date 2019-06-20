<?php

namespace Nedmas\Concerns\Tests\Features;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nedmas\Concerns\Tests\Fixtures\Post;
use Nedmas\Concerns\Tests\Fixtures\PostWithCustomUlidColumn;
use Orchestra\Testbench\TestCase;

class GenerateUlidTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->char('ulid', 26)->nullable()->index();
            $table->char('custom', 26)->nullable()->index();
            $table->text('title');
            $table->timestamps();
        });
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
    }

    public function testUlidIsSetWhenCreatingANewModel(): void
    {
        $post = Post::create(['title' => 'Lorem ipsum']);

        $this->assertNotNull($post->ulid);
    }

    public function testUlidIsNotOverridenIfAlreadySet(): void
    {
        $ulid = '01ddask7qt4qzjwc2eah3t7sv6';

        $post = Post::create(['title' => 'Lorem ipsum', 'ulid' => $ulid]);

        $this->assertSame($ulid, $post->ulid);
    }

    public function testModelCanBeFoundByUlid(): void
    {
        $ulid = '01ddask7qt4qzjwc2eah3t7sv6';

        Post::create(['title' => 'Lorem ipsum', 'ulid' => $ulid]);

        $post = Post::whereUlid($ulid)->first();

        $this->assertInstanceOf(Post::class, $post);
        $this->assertSame($ulid, $post->ulid);
    }

    public function testCustomUlidColumn(): void
    {
        $post = PostWithCustomUlidColumn::create(['title' => 'Lorem ipsum']);

        $this->assertNotNull($post->custom);
    }
}

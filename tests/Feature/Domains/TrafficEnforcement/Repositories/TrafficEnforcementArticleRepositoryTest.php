<?php

namespace Tests\Feature\Domains\TrafficEnforcement\Repositories;

use App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Domains\TrafficEnforcement\Repositories\TrafficEnforcementArticleRepository;
use Illuminate\Support\Facades\Artisan;

class TrafficEnforcementArticleRepositoryTest extends TestCase
{
    use RefreshDatabase;

    private $repository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = new TrafficEnforcementArticleRepository();
    }

    /** @test */
    public function it_can_get_all_articles()
    {
        TrafficEnforcementArticle::factory(3)->create();

        $articles = $this->repository->getAll();

        $this->assertCount(3, $articles);
    }
}

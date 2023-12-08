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

    /** @test */
    public function it_can_get_article_by_id()
    {
        $article = TrafficEnforcementArticle::factory()->create();

        $retrievedArticle = $this->repository->getById($article->id);

        $this->assertEquals($article->id, $retrievedArticle->id);
    }

    /** @test */
    public function it_can_create_an_article()
    {
        $articleData = [
            'code' => 'ART001',
            'description' => 'Sample Article',
        ];

        $createdArticle = $this->repository->create($articleData);

        $this->assertDatabaseHas('traffic_enforcement_articles', $articleData);
        $this->assertEquals($articleData['code'], $createdArticle->code);
    }

    /** @test */
    public function it_can_update_an_article()
    {
        $article = TrafficEnforcementArticle::factory()->create();
        $newArticleData = [
            'code' => 'ART002',
            'description' => 'Updated Article',
        ];

        $updatedArticle = $this->repository->update($article->id, $newArticleData);

        $this->assertEquals($newArticleData['code'], $updatedArticle->code);
        $this->assertEquals($newArticleData['description'], $updatedArticle->description);
    }

    /** @test */
    public function it_can_delete_an_article()
    {
        $article = TrafficEnforcementArticle::factory()->create();

        $this->repository->delete($article->id);

        $this->assertSoftDeleted('traffic_enforcement_articles', ['id' => $article->id]);
    }
}

<?php

namespace Tests\Feature\Domains\TrafficEnforcement\Controllers;

use App\Domains\TrafficEnforcement\Controllers\TrafficEnforcementArticleController;
use App\Domains\TrafficEnforcement\Repositories\TrafficEnforcementArticleRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrafficEnforcementArticleControllerTest extends TestCase
{
    /** @test */
    public function it_can_display_a_list_of_articles()
    {
        // Crie um mock do seu repositório
        $mockRepository = $this->createMock(TrafficEnforcementArticleRepository::class);

        // Configure o mock para retornar uma lista simulada de artigos
        $mockRepository->expects($this->once())
            ->method('getAll')
            ->willReturn([
                ['code' => '162', 'description' => 'artigo 162'],
                ['code' => '163', 'description' => 'artigo 163'],
                ['code' => '164', 'description' => 'artigo 164'],
                ['code' => '165', 'description' => 'artigo 165'],
            ]);

        // Crie uma instância do controlador injetando o mock do repositório
        $controller = new TrafficEnforcementArticleController($mockRepository);

        // Chame o método index do controlador
        $response = $controller->index();

        // Assert que a resposta tem o status esperado
        $response->assertStatus(200);

        // Assert que a view correta é retornada (opcional)
        $response->assertViewIs('traffic_enforcement.index'); // ajuste para o nome real da view, se aplicável
    }
}

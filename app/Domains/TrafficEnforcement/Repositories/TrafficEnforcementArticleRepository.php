<?php

namespace App\Domains\TrafficEnforcement\Repositories;

use App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle;

class TrafficEnforcementArticleRepository
{
    public function getAll()
    {
        return TrafficEnforcementArticle::all();
    }

    public function getById($id)
    {
        return TrafficEnforcementArticle::find($id);
    }

    public function create(array $data)
    {
        return TrafficEnforcementArticle::create($data);
    }

    public function update($id, array $data)
    {
        $article = TrafficEnforcementArticle::find($id);
        $article->update($data);

        return $article;
    }

    public function delete($id)
    {
        return TrafficEnforcementArticle::destroy($id);
    }
}

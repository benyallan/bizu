<?php

namespace App\Domains\TrafficEnforcement\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrafficEnforcementArticle extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return \App\Domains\TrafficEnforcement\Database\Factories\TrafficEnforcementArticleFactory::new();
    }
}

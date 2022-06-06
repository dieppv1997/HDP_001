<?php

namespace App\Services;

use App\Repositories\AssetCategory\AssetCategoryRepository;
use App\Traits\HttpClient;

class TestService
{
    use HttpClient;

    public function __construct(AssetCategoryRepository $assetCategoryRepository)
    {
        $this->assetCategoryRepository = $assetCategoryRepository;
    }

    public function test()
    {
        dd('test');
    }
}

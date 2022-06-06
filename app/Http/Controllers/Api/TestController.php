<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssetCategoryRequest;
use App\Http\Requests\BaseRequest\CheckoutRequest;
use App\Http\Resources\AssetCategoryResource;
use App\Services\AssetCategoryService;
use App\Services\TestService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function test(CheckoutRequest $request)
    {
        dd($request);
        dd($this->testService->test());
    }

}

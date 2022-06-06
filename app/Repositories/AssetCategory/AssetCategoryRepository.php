<?php

namespace App\Repositories\AssetCategory;

use App\Models\AssetCategory;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AssetCategoryRepository extends BaseRepository implements RepositoryInterface
{
    public function __construct(AssetCategory $assetCategory)
    {
        parent::__construct($assetCategory);
    }

    public function getAll()
    {
        return $this->model->orderBy('id','DESC')->get();
    }

    public function searchByNameOrCode($key)
    {
        return ($this->model->where('name', 'like', '%' . $key . '%')->Orwhere('code', 'like', '%' . $key . '%')->orderBy('id','DESC')->get());
    }

    public function getAssetCategoryByCode($attributes)
    {
        return $this->model->where('code',$attributes['code'])->first();
    }
}

<?php

namespace App\Repository\Eloquent;

use App\Models\Vendor;
use App\Repository\VendorRepositoryInterface;

class VendorRepository extends BaseRepository implements VendorRepositoryInterface
{

    protected $model;

    public function __construct(Vendor $model) {
        $this->model = $model;
    }

}

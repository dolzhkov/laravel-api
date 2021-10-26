<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\VendorRepositoryInterface;

class VendorController extends Controller
{

    private $vendorRepository;

    public function __construct(VendorRepositoryInterface $vendorRepository)
    {
        $this->vendorRepository = $vendorRepository;
    }

    public function index() {
        return response()->json($this->vendorRepository->all(), 200);
    }

}

<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\{Vendor, Models, Generation, Modification};
use App\Http\Resources\{Vendor as VendorResource,
    Models as ModelResource,
    Generation as GenerationResource,
    Modification as ModificationResource};

class VehicleController extends BaseController
{

    public function getVendors()
    {
        $vendors = Vendor::all();
        return $this->sendResponse(VendorResource::collection($vendors), 'Успешно');
    }

    public function getModelsByVendor($vendor_id) {
        $models = Models::where('vendor_id', $vendor_id)->get();
        if ($models === null) {
            return $this->sendError('Ошибка', 'Ничего не найдено', 404);
        }
        return $this->sendResponse(ModelResource::collection($models), 'Успех');
    }

    public function getGenerationByModel($model_id) {
        $generations = Generation::where('model_id', $model_id)->get();
        if ($generations === null) {
            return $this->sendError('Ошибка', 'Ничего не найдено', 404);
        }
        return $this->sendResponse(GenerationResource::collection($generations), 'Успех');
    }

    public function getModificationByGeneration($generation_id) {
        $modifications = Modification::where('generation_id', $generation_id)->get();
        if ($modifications === null) {
            return $this->sendError('Ошибка', 'Ничего не найдено', 404);
        }
        return $this->sendResponse(ModificationResource::collection($modifications), 'Успех');
    }

    public function getModificationByModel($model_id) {
        $modifications = Modification::where('model_id', $model_id)->get();
        if ($modifications === null) {
            return $this->sendError('Ошибка', 'Ничего не найдено', 404);
        }
        return $this->sendResponse(ModificationResource::collection($modifications), 'Успех');
    }
}

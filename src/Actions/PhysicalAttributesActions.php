<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Models\PhysicalAttributes;
use Wovosoft\BdHrmProfile\Models\Profile;
use Wovosoft\LaravelCommon\Helpers\Data;

trait PhysicalAttributesActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->physicalAttributes()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(PhysicalAttributes $physicalAttributes, Request $request): JsonResponse
    {
        return Data::store($physicalAttributes, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(PhysicalAttributes $physicalAttributes): JsonResponse
    {
        return Data::destroy($physicalAttributes);
    }

    public function find(PhysicalAttributes $physicalAttributes, Request $request): string
    {
        return $physicalAttributes->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->physicalAttributes(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->physicalAttributes(), $request);
    }
}

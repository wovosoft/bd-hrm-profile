<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Models\PresentAddress;
use Wovosoft\BdHrmProfile\Models\Profile;
use Wovosoft\LaravelCommon\Helpers\Data;

trait PresentAddressActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->presentAddress()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(PresentAddress $presentAddress, Request $request): JsonResponse
    {
        return Data::store($presentAddress, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(PresentAddress $presentAddress): JsonResponse
    {
        return Data::destroy($presentAddress);
    }

    public function find(PresentAddress $presentAddress, Request $request): string
    {
        return $presentAddress->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->presentAddress(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->presentAddress(), $request);
    }
}

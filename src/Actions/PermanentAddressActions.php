<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Models\PermanentAddress;
use Wovosoft\BdHrmProfile\Models\Profile;
use Wovosoft\LaravelCommon\Helpers\Data;

trait PermanentAddressActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->permanentAddress()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(PermanentAddress $permanentAddress, Request $request): JsonResponse
    {
        return Data::store($permanentAddress, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(PermanentAddress $permanentAddress): JsonResponse
    {
        return Data::destroy($permanentAddress);
    }

    public function find(PermanentAddress $permanentAddress, Request $request): string
    {
        return $permanentAddress->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->permanentAddress(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->permanentAddress(), $request);
    }
}

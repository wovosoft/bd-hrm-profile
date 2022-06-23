<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Models\CitizenshipInfo;
use Wovosoft\BdHrmProfile\Models\Profile;
use Wovosoft\LaravelCommon\Helpers\Data;

trait CitizenshipActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->citizenshipInformation()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(CitizenshipInfo $citizenshipInfo, Request $request): JsonResponse
    {
        return Data::store($citizenshipInfo, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(CitizenshipInfo $citizenshipInfo): JsonResponse
    {
        return Data::destroy($citizenshipInfo);
    }

    public function find(CitizenshipInfo $citizenshipInfo, Request $request): string
    {
        return $citizenshipInfo->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->citizenshipInformation(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->citizenshipInformation(), $request);
    }
}

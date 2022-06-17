<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Helpers\Data;
use Wovosoft\BdHrmProfile\Models\Photo;
use Wovosoft\BdHrmProfile\Models\Profile;

trait PhotoActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->photos()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(Photo $photo, Request $request): JsonResponse
    {
        return Data::store($photo, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(Photo $photo): JsonResponse
    {
        return Data::destroy($photo);
    }

    public function find(Photo $photo, Request $request): string
    {
        return $photo->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->photos(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->photos(), $request);
    }
}

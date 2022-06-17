<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Wovosoft\BdHrmProfile\Helpers\Data;
use Wovosoft\BdHrmProfile\Models\Profile;

trait ProfileActions
{
    /**
     * @throws \Throwable
     */
    public function store(Request $request): JsonResponse
    {
        return Data::store(new Profile(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(Profile $profile): JsonResponse
    {
        return Data::destroy($profile);
    }

    public function find(Profile $profile, Request $request): string
    {
        return $profile->toJson();
    }

    public function index(Request $request): LengthAwarePaginator
    {
        return Data::paginate(Profile::query(), $request);
    }

    public function options(Request $request): Collection|array
    {
        return Data::options(Profile::query(), $request);
    }

    public function familyMembers(Profile $profile, Request $request)
    {
        return $profile->familyMembers;
    }

    public function contacts(Profile $profile, Request $request)
    {
        return $profile->contacts;
    }

    public function presentAddress(Profile $profile)
    {
        return $profile->present_address;
    }

    public function permanentAddress(Profile $profile)
    {
        return $profile->permanent_address;
    }

    public function citizenshipInformation(Profile $profile)
    {
        return $profile->citizenshipInformation;
    }
}

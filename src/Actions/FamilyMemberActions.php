<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Wovosoft\BdHrmProfile\Helpers\Data;
use Wovosoft\BdHrmProfile\Models\FamilyMember;
use Wovosoft\BdHrmProfile\Models\Profile;

trait FamilyMemberActions
{
    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->familyMembers()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(FamilyMember $familyMember, Request $request): JsonResponse
    {
        return Data::store($familyMember, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(FamilyMember $familyMember): JsonResponse
    {
        return Data::destroy($familyMember);
    }

    public function find(FamilyMember $familyMember, Request $request): string
    {
        return $familyMember->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->familyMembers(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->familyMembers(), $request);
    }
}

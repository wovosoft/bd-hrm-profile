<?php

namespace Wovosoft\BdHrmProfile\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use Wovosoft\BdHrmProfile\Models\Contact;
use Wovosoft\BdHrmProfile\Models\Profile;
use Wovosoft\LaravelCommon\Helpers\Data;

trait ContactActions
{

    /**
     * @throws \Throwable
     */
    public function store(Profile $profile, Request $request): JsonResponse
    {
        return Data::store($profile->contacts()->newModelInstance(), $request);
    }

    /**
     * @throws \Throwable
     */
    public function update(Contact $contact, Request $request): JsonResponse
    {
        return Data::store($contact, $request);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(Contact $contact): JsonResponse
    {
        return Data::destroy($contact);
    }

    public function find(Contact $contact, Request $request): string
    {
        return $contact->toJson();
    }

    public function index(Profile $profile, Request $request): LengthAwarePaginator
    {
        return Data::paginate($profile->contacts(), $request);
    }

    public function options(Profile $profile, Request $request): Collection|array
    {
        return Data::options($profile->contacts(), $request);
    }
}

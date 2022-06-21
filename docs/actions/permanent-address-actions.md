# Permanent Address Actions

These actions are responsible for performing CRUD operations on permanent address information of a profile.

## Usage

The actions are provided by a trait. So, just by injecting the trait, the actions can be used.

```php
use \App\Http\Controllers\Controller;

class PermanentAddressController extends Controller{
    use \Wovosoft\BdHrmProfile\Actions\PermanentAddressActions;
}
```

## Default Methods

```php
//used to store data
public function store(Profile $profile, Request $request): JsonResponse

//used to update data
public function update(PermanentAddress $permanentAddress, Request $request): JsonResponse

//used to destroy data
public function destroy(PermanentAddress $permanentAddress): JsonResponse

//used to find data
public function find(PermanentAddress $permanentAddress, Request $request): string

//data pagination
public function index(Profile $profile, Request $request): LengthAwarePaginator

//query and return data as options.
public function options(Profile $profile, Request $request): Collection|array
```

# Citizenship Information Actions

These actions are responsible for performing CRUD operations on citizenship information of a profile. Here citizenship
information refers to NID, Birth Certificate No. etc.

## Usage

The actions are provided by a trait. So, just by injecting the trait, the actions can be used.

```php
use Wovosoft\BdHrmProfile\Actions\CitizenshipActions;
use \App\Http\Controllers\Controller;

class CitizenshipInfoController extends Controller{
    use CitizenshipActions;
}
```

## Default Methods

```php
//used to store data
public function store(Profile $profile, Request $request): JsonResponse

//used to update data
public function update(CitizenshipInfo $citizenshipInfo, Request $request): JsonResponse

//used to destroy data
public function destroy(CitizenshipInfo $citizenshipInfo): JsonResponse

//used to find data
public function find(CitizenshipInfo $citizenshipInfo, Request $request): string

//data pagination
public function index(Profile $profile, Request $request): LengthAwarePaginator

//query and return data as options.
public function options(Profile $profile, Request $request): Collection|array
```

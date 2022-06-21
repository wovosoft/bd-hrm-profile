# Present Address Actions

These actions are responsible for performing CRUD operations on Present address information of a profile.

## Usage

The actions are provided by a trait. So, just by injecting the trait, the actions can be used.

```php
use \App\Http\Controllers\Controller;

class PresentAddressController extends Controller{
    use \Wovosoft\BdHrmProfile\Actions\PresentAddressActions;
}
```

## Default Methods

```php
//used to store data
public function store(Profile $profile, Request $request): JsonResponse

//used to update data
public function update(PresentAddress $presentAddress, Request $request): JsonResponse

//used to destroy data
public function destroy(PresentAddress $presentAddress): JsonResponse

//used to find data
public function find(PresentAddress $presentAddress, Request $request): string

//data pagination
public function index(Profile $profile, Request $request): LengthAwarePaginator

//query and return data as options.
public function options(Profile $profile, Request $request): Collection|array
```

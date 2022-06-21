# Photo Actions

These actions are responsible for performing CRUD operations on Photos information of a profile.

## Usage

The actions are provided by a trait. So, just by injecting the trait, the actions can be used.

```php
use \App\Http\Controllers\Controller;

class PhotoController extends Controller{
    use \Wovosoft\BdHrmProfile\Actions\PhotoActions;
}
```

## Default Methods

```php
//used to store data
public function store(Profile $profile, Request $request): JsonResponse

//used to update data
public function update(Photo $photo, Request $request): JsonResponse

//used to destroy data
public function destroy(Photo $photo): JsonResponse

//used to find data
public function find(Photo $photo, Request $request): string

//data pagination
public function index(Profile $profile, Request $request): LengthAwarePaginator

//query and return data as options.
public function options(Profile $profile, Request $request): Collection|array
```

# Profile Actions

These actions are responsible for performing CRUD operations on profiles.

## Usage

The actions are provided by a trait. So, just by injecting the trait, the actions can be used.

```php
use \App\Http\Controllers\Controller;

class ProfileController extends Controller{
    use \Wovosoft\BdHrmProfile\Actions\ProfileActions;
}
```

## Methods

```php
//stores a record
public function store(Request $request): JsonResponse

//updates a record
public function update(Profile $profile, Request $request): JsonResponse

//deletes a record
public function destroy(Profile $profile): JsonResponse

//returns a single record
public function find(Profile $profile): Profile

//provides paginated data
public function index(Request $request): LengthAwarePaginator

//returns records of a profile, query params : filter (string) & limit (integer)
public function options(Request $request): Collection|array

//returns family members of a profile
public function familyMembers(Profile $profile, Request $request)

//returns contacts of a profile
public function contacts(Profile $profile, Request $request)

//returns present address of a profile
public function presentAddress(Profile $profile)

//returns permanent address of a profile
public function permanentAddress(Profile $profile)

//returns citizenship information of a profile
public function citizenshipInformation(Profile $profile)
```

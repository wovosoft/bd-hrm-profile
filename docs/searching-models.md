# Searching Models

Models can be searched by `search` method. The search method uses Laravel Scout.

So, to know more about this check the Laravel [Scout Documentation](https://laravel.com/docs/9.x/scout#main-content).

## Searching Eloquent ORM

```php
use \Wovosoft\BdHrmProfile\Models\Profile;

//this line of code will search profiles which contain `wovosoft` word.
$builder = Profile::query()->search("wovosoft");

// we have made the query builder with searching,
// now anykind of orm operation can be applied

// 1. Getting a list
$builder->limit(25)->get();

// 2. Paginate the searched records
$builder->paginate(15);

// 3. Deleting records
$builder->get()->each(fn(Profile $profile) => $profile->delete());

// ....and so on.
```

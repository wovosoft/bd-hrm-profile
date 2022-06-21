# Routes

Routes are defined by the following line of code:

```php
//filename: routes/web.php
//exported by "php artisan route:list"

\Wovosoft\BdHrmProfile\BdHrmProfile::routes();
```

Below is a list of available routes defined by the package by default. While registering routes manually they should
follow the following list of routes & methods of data submission.

```markdown
DELETE hrm-profiles/citizenship_infos/destroy/{citizenship_info} ....... profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@destroy
POST hrm-profiles/citizenship_infos/find/{citizenship_info} ................ profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@find
POST hrm-profiles/citizenship_infos/index/{profile} ...................... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@index
POST hrm-profiles/citizenship_infos/options/{profile} ................ profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@options
PUT hrm-profiles/citizenship_infos/store ................................ profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@store
PUT hrm-profiles/citizenship_infos/update/{citizenship_info} .......... profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@update
DELETE hrm-profiles/contacts/destroy/{contact} ......................... profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@destroy
POST hrm-profiles/contacts/find/{contact} .................................. profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@find
POST hrm-profiles/contacts/index/{profile} ............................... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@index
POST hrm-profiles/contacts/options/{profile} ......................... profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@options
PUT hrm-profiles/contacts/store ......................................... profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@store
PUT hrm-profiles/contacts/update/{contact} ............................ profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\ContactController@update
DELETE hrm-profiles/family_members/destroy/{family_member} ........ profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@destroy
POST hrm-profiles/family_members/find/{family_member} ................. profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@find
POST hrm-profiles/family_members/index/{profile} .................... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@index
POST hrm-profiles/family_members/options/{profile} .............. profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@options
PUT hrm-profiles/family_members/store .............................. profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@store
PUT hrm-profiles/family_members/update/{family_member} ........... profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\FamilyMemberController@update
DELETE hrm-profiles/permanent_addresses/destroy/{permanent_address} profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@de…
DELETE hrm-profiles/permanent_addresses/destroy/{present_address} profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\PresentAddressController@destroy
POST hrm-profiles/permanent_addresses/find/{permanent_address} .... profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@find
POST hrm-profiles/permanent_addresses/find/{present_address} ........ profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\PresentAddressController@find
POST hrm-profiles/permanent_addresses/index/{profile} ........... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@index
POST hrm-profiles/permanent_addresses/options/{profile} ..... profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@options
PUT hrm-profiles/permanent_addresses/store ..................... profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@store
PUT hrm-profiles/permanent_addresses/update/{permanent_address} profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\PermanentAddressController@upda…
PUT hrm-profiles/permanent_addresses/update/{present_address} .. profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\PresentAddressController@update
DELETE hrm-profiles/photos/destroy/{photo} ............................... profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@destroy
POST hrm-profiles/photos/find/{photo} ........................................ profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@find
POST hrm-profiles/photos/index/{profile} ................................... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@index
POST hrm-profiles/photos/options/{profile} ............................. profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@options
PUT hrm-profiles/photos/store ............................................. profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@store
PUT hrm-profiles/photos/update/{photo} .................................. profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\PhotoController@update
DELETE hrm-profiles/physical_attributes/destroy/{physical_attributes} profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesControlle…
POST hrm-profiles/physical_attributes/find/{physical_attributes} profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesController@find
POST hrm-profiles/physical_attributes/index/{profile} ......... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesController@index
POST hrm-profiles/physical_attributes/options/{profile} ... profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesController@options
PUT hrm-profiles/physical_attributes/store ................... profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesController@store
PUT hrm-profiles/physical_attributes/update/{physical_attributes} profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\PhysicalAttributesController@…
POST hrm-profiles/profiles ............................................... profiles.index ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@index
POST hrm-profiles/profiles/citizenship-information/{profile} profiles.citizenshipInformation ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@c…
POST hrm-profiles/profiles/contacts/{profile} ...................... profiles.contacts ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@contacts
DELETE hrm-profiles/profiles/destroy/{profile} ......................... profiles.destroy ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@destroy
POST hrm-profiles/profiles/family-members/{profile} ...... profiles.familyMembers ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@familyMembers
POST hrm-profiles/profiles/find/{profile} .................................. profiles.find ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@find
POST hrm-profiles/profiles/options ................................... profiles.options ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@options
POST hrm-profiles/profiles/permanent-address/{profile} profiles.permanentAddress ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@permanentAddr…
POST hrm-profiles/profiles/present-address/{profile} ... profiles.presentAddress ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@presentAddress
PUT hrm-profiles/profiles/store ......................................... profiles.store ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@store
PUT hrm-profiles/profiles/update/{profile} ............................ profiles.update ›
Wovosoft\BdHrmProfile\Http\Controllers\ProfileController@update
POST office_types ........................................................ office_types.index ›
Wovosoft\BkbOffices\Controllers\OfficeTypeController@index
DELETE office_types/delete/{office} ...................................... office_types.delete ›
Wovosoft\BkbOffices\Controllers\OfficeTypeController@delete
```

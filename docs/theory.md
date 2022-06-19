# Theory behind the scene

In most of the applications like, School Management Systems, Result Management Systems, Admission Management Systems,
Payroll etc. HRM info management is necessary.

So, this package is developed to fill that necessary. I have tried my best to add all the probable fields of a person.
In the future, if necessary, some other fields might be added or removed.

## Data Structure

Basic fields are added in `profiles` table:

- name
- bn_name (name in bengali)
- dob (date of birth)
- profile photo
- fathers_name
- bn_fathers_name (in bengali)
- mothers_name
- bn_mothers_name (in bengali)
- spouse_name
- bn_spouse_name (in bengali)
- gender
- religion
- marital_status

Other fields are added in separate tables:

- permanent address
- present address
- physical attributes
- citizenship information
- contacts (will be moved in separate module, cause not only person but also institutions have contacts)
- family members
- photos (can be moved in a pivot table, will think about it later)

Data/Information are divided in multiple tables to optimize the database's data structure and query.
Check out the [migrations](https://github.com/wovosoft/bd-hrm-profile/tree/master/database/migrations) for more details
about the tables.

## Coding Structure

The package offers its features in Laravel approach. There is a Facade which offers basic CRUD actions.
Then there are separate controllers which can be extended or used directly for basic CRUD operations.

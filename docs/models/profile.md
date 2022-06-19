# Profile Model

This model is responsible for holding the basic information of a Person. It includes following fields:

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

## Relations

- `permanentAddress`->`hasOne`([PermanentAddress](./permanent-address))
- `presentAddress`->`hasOne`([PresentAddress](./present-address))
- `physicalAttributes`->`hasMany`([PhysicalAttributes](./physical-attributes))
- `citizenshipInformation`->`hasMany`([CitizenshipInfo](./citizenship-info))
- `contacts`->`hasMany`([Contact](./contacts))
- `familyMembers`->`hasMany`([FamilyMember](./family-members))
- `photos`->`hasMany`([Photo](./photo))
- `photo`->`hasOne`([Photo](./photo)) //current profile photo

export default {
    // base: "bkb-offices",
    title: 'Profile Module for HRMS Systems',
    description: 'Profile Module for HRMS systems based on Bangladesh',
    themeConfig: {
        siteTitle: 'HRMS Profile Module',
        nav: [
            {text: 'Configs', link: '/configuration'},
            {text: 'Complements & Complains', link: '/compliments-and-complains'}
        ],
        sidebar: [
            {
                collapsible: true,
                text: 'Basic',
                items: [
                    {text: 'Getting Started', link: '/getting-started'},
                    {text: 'Developer Information', link: '/developer'},
                    {text: 'Configuration', link: '/configuration'},
                ]
            },
            {
                collapsible: true,
                text: 'Digging Deeper',
                items: [
                    {text: 'Theory', link: '/theory'},
                    {text: 'Searching Models', link: '/searching-models'},
                ]
            },
            {
                collapsible: true,
                text: 'Models',
                items: [
                    {text: 'List of Models', link: '/models/index'},
                    {text: 'Profile', link: '/models/profile'},
                    {text: 'CitizenshipInfo', link: '/models/citizenship-info'},
                    {text: 'Contact', link: '/models/contacts'},
                    {text: 'FamilyMember', link: '/models/family-members'},
                    {text: 'PermanentAddress', link: '/models/permanent-address'},
                    {text: 'PresentAddress', link: '/models/present-address'},
                    {text: 'Photo', link: '/models/photo'},
                    {text: 'PhysicalAttributes', link: '/models/physical-attributes'},

                ]
            },
            {
                collapsible: true,
                text: 'Traits',
                items: [
                    {text: 'HasDivisionActions', link: '/traits/has-division-actions'},
                    {text: 'HasDistrictActions', link: '/traits/has-district-actions'},
                    {text: 'HasUpazilaActions', link: '/traits/has-upazila-actions'},
                    {text: 'HasUnionAction', link: '/traits/has-union-actions'},
                ]
            }
        ]
    }
}

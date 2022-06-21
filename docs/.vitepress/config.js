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
                    {text: 'Service Provider', link: '/service-container'},
                ]
            },
            {
                collapsible: true,
                text: 'Models',
                items: [
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
                text: 'Actions',
                items: [
                    {text: 'Profile Actions', link: '/actions/profile-actions'},
                    {text: 'Citizenship Info Actions', link: '/actions/citizenship-actions'},
                    {text: 'Contact Actions', link: '/actions/contact-actions'},
                    {text: 'Family Member Actions', link: '/actions/family-member-actions'},
                    {text: 'Permanent Address Actions', link: '/actions/permanent-address-actions'},
                    {text: 'Present Address Actions', link: '/actions/present-address-actions'},
                    {text: 'Photo Actions', link: '/actions/photo-actions'},
                ]
            },
            {
                collapsible: true,
                text: 'HTTP API',
                items: [
                    {text: 'Default Routes', link: '/api/routes'}
                ]
            }
        ]
    }
}

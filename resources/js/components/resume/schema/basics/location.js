export default {
    fields: [
        //Location
        {
            type:'input',
            inputType:'text',
            placeholder:'P Sherman Wallaby Way 42',
            label: 'Adress',
            model: 'adress',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },
        //Postal Code
        {
            type:'input',
            inputType:'text',
            placeholder:'CP 1437',
            label: 'Postal Code',
            model: 'postalCode',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },
        //City
        {
            type:'input',
            inputType:'text',
            placeholder:'Sydney',
            label: 'City',
            model: 'city',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },
        //Country
        {
            type:'input',
            inputType:'text',
            placeholder:'Australia',
            label: 'Country',
            model: 'country',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },
    ]
}

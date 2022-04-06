export default {
    fields: [
        //Network
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Taringa',
            label: 'Network',
            model:'network',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //URL
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'https://taringa.com/usuario',
            label: 'Url',
            model:'url',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Username
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Your username',
            label: 'Username',
            model:'username',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        }
    ]
}

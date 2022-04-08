export default {
    fields: [
        //Picture
        {
            type: 'resume-image',
            label: 'Resume profile image',
            model: 'picture',
        },
        {
            type: "input",
            inputType: "text",
            label: "Title",
            placeholder: "Wow this is my resume",
            model: "title",
            inputName: "title",
        },
        //name
        {
            type:'input',
            inputType:'text',
            placeholder:'Your name',
            label: 'Name',
            model: 'name',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //label
        {
            type:'input',
            inputType:'text',
            placeholder:'Programer',
            label: 'Label',
            model: 'label',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Email
        {
            type:'input',
            inputType:'text',
            placeholder:'email@email.com',
            label: 'Email',
            model: 'email',
            validator: 'email',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Phone
        {
            type:'input',
            inputType:'tel',
            placeholder:'Your phone',
            label: 'Phone',
            model: 'phone',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Website
        {
            type:'input',
            inputType:'text',
            placeholder:'https://website.com',
            label: 'Website',
            model: 'website',
            validator: 'url',
            styleClasses: ['col-md-8', 'p-1', 'pr-md-1'],
        },
        //Sumary
        {
            type:'textArea',
            inputType:'text',
            placeholder:'About you',
            label: 'Sumary',
            model: 'sumary'
        }
    ]
}

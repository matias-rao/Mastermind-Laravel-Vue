export default {
    fields: [
        //Institution
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Harvard',
            label: 'Institution',
            model:'institution',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Area
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Software Engeneer',
            label: 'Career',
            model:'career',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Website
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'https://www.harvard.edu/',
            label: 'Website',
            model:'website',
            validator: 'url',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Start Date
        {
            type: 'input',
            inputType: 'date',
            format: 'YYYY-MM-DD',
            label: 'Start Date',
            model:'startDate',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },
        //End Date
        {
            type: 'input',
            inputType: 'date',
            format: 'YYYY-MM-DD',
            label: 'End Date',
            model:'endDate',
            styleClasses: ['col-md-6', 'p-1', 'pr-md-1'],
        },

    ]
}

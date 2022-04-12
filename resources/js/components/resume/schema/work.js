export default {
    fields: [
        //company
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Netactics',
            label: 'Company',
            model:'company',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
            required: true
        },
        //Position
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'Job title',
            label: 'Position',
            model:'position',
            styleClasses: ['col-md-4', 'p-1', 'pr-md-1'],
        },
        //Website
        {
            type: 'input',
            inputType: 'text',
            placeholder: 'https://netactics.com.ar',
            label: 'Website',
            model:'website',
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
        //Summary
        {
            type: 'textArea',
            inputType: 'text',
            label: 'Summary',
            model:'summary',
            placeholder: 'What did you do in this job?'
        }
    ]
}

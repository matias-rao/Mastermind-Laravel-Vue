<template>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="resume in resumes" :key="resume.id">
                <th scope="row">{{ resume.id }}</th>
                <td class="text-uppercase bg-dark text-info ">{{ resume.title }}</td>
                <td>
                    <div class="d-flex justify-content-end">
                        <div class="mx-2"><a :href="'/resumes/' + resume.id + '/edit'" class="btn btn-primary">Edit</a></div>
                        <button type="submit" class="btn btn-danger"  v-on:click="deleteResume(resume.id)">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</template>
<script>

export default {
    name: 'ResumeIndex',
    props: {
        resumes: Array
    },
    methods: {
        deleteResume(resumeId){
            axios.post(`/resumes/${resumeId}`, {
                _method: 'DELETE'
            }).then( response => {
                location.reload();
            })

        }

    }
}
</script>
}

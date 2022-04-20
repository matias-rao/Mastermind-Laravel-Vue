<template>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
        </tr>
        </thead>
        <tbody>
        <div v-for="resume in resumes" :key="resume.id">
            <!--  -->
            <tr>
                <td>{{resume.id}}</td>
                <td><a class="" :href="'/resumes/' + resume.id + '/edit'">{{resume.title}}</a></td>
            </tr>
        </div>
        </tbody>
    </table>



</template>
<script>

export default {
    name: 'ResumeIndex',
    props: {
        resumes: Array
    }
}
</script>

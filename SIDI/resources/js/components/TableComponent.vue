<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for ="user in users">
            <th scope="row">{{user.id}}</th>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        mounted() {
            this.getUsers();
        },

        data() {
            return {
                users: []
            }
        },

        methods: {
            getUsers() {
                var urlUsers = "users";
                axios.get(urlUsers).then(response => {
                    this.users = response.data
                });
            },
        },
    }

</script>

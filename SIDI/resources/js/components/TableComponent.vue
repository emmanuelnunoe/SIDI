<template>
<table class="table table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users">
      <th scope="row">{{ user.id}}</th>
      <td> {{ user.name }} </td>
      <td> {{ user.email }} </td>
    </tr>
  </tbody>

  
</table>
</template>

<script>
    import datatables from 'datatables'
    export default {
        mounted() {
            this.getUsers();
        },

        data()
        {
            return{
                  users: []

            }
        },

        methods:{

            myTable(){
              $( function () {
                $('#myTable').DataTable();
                } );
            },

            getUsers(){
                var urlUsers = "users";
                axios.get(urlUsers).then(response=>{
                    this.users = response.data;
                    this.myTable()
                 });
            },
        }
    }
</script>

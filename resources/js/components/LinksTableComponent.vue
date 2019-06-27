<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table>
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>URL</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="link in links">
                            <td>{{link.title}}</td>
                            <td>{{link.url}}</td>
                            <td>{{link.description}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return{
                link:{title: '', url: '', description:''},
                links: []
            }
        },
        created(){
            axios.get('api/links').then(result => {
                this.links = result.data;
            });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

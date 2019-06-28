<template>
<!--el div despues de <template> es obligatorio,
    dentro de ese div ira todo el html que queremos
    renderizar donde lo llamemos-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">URL</th>
                            <th scope="col">Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach en para llenar la tabla-->
                        <tr scope="row" v-for="link in links">
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
        /*
            en el return de data, deben ir todos los
            atributos que utiliza el componente*/
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
            /* estructura de funcion axios, para llamadas
                asincronas
            axios.tipoPeticion('ruta').then(result => {
               javascript burdo y salvaje
            })*/
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

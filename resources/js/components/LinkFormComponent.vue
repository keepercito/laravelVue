<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form action="" method="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="">
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" name="url" id="url" value="">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return{

            }
        },
        created(){

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

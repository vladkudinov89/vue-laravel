<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">AjaxComponent Component</div>

                    <div class="card-body">
                        I'm an AjaxComponent.
                    </div>
                </div>
                <button @click="update" class="btn btn-large mb-1"
                v-if="!is_refresh"
                >Обновить ... {{id}}</button>

                <span class="badge badge-primary mb-1" v-if="is_refresh">Обновление ... </span>

                <table class="table table-active">
                    <thead>
                    <tr>
                        <td>наименвоание</td>
                        <td>URL</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="url in urldata">
                        <td>{{url.title}}</td>
                        <td>{{url.url}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // props: [
        //     'jsondata'
        // ],
        data : function(){
            return {
                urldata : [],
                is_refresh : false,
                id: 0
            }
        },
        mounted() {
             this.update();
            console.log("wdwdw");
        },
        methods: {
            update: function () {
                // console.log(this.jsondata);
                this.refresh = true;
                axios.get('/start/get-json').then((response) => {
                    console.log(response);
                    this.urldata = response.data;
                    this.refresh = false;
                    this.id++;
                })
            }
        }
    }
</script>

<style scoped>

</style>
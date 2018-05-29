<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">propComponent Component</div>

                    <div class="card-body">
                        I'm an propComponent component.
                    </div>
                </div>
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
        props: [
            'urldata'
        ],
        mounted() {
            this.update();
            // console.log("wdwdw");
        },
        methods: {
            update: function () {
                console.log(this.urldata);
            }
        }
    }
</script>

<style scoped>

</style>
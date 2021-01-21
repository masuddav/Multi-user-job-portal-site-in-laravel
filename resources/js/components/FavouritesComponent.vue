<template>
    <div>


            <button v-if="show" @click.prevent="save()" style="widh:100%" class="btn btn-warning ml-md-2">Save Job</button>
            <button v-else @click.prevent="unsave()" style="widh:100%" class="btn btn-success ml-md-2">Unsave Job</button>

        </form>
    </div>
</template>

<script>
    export default {
        props:['jobid','favour'],
        mounted() {
            console.log ('Component mounted.')
        },
        data(){
            return {
                show:true
            }
        },
        mounted() {
            this.show =this.jobFavourited?true:false
        },
       computed:{
            jobFavourited(){
                this.favour()
            }
       },
       methods:{
            save(){
                axios.post('/save/'+this.jobid)
                .then(response=>this.show=false)
                .catch(error=>alert('Something Error'))
            },
           unsave(){

               axios.post('/unsave/'+this.jobid)

                   .then(response=>this.show=true)
                   .catch(error=>alert('Something Error'))
           },
       }
    }
</script>

<style scoped>

</style>

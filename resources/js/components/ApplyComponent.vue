<template>
    <div>
    <form @submit="formSubmit">

        <button v-if="show" style="widh:100%" class="btn btn-info ml-md-2">Apply</button>
        <div v-else class=" alert-info">
            Job Applied Successfully.
        </div>
    </form>
    </div>
</template>

<script>
    export default {
        props:['jobid'],
       mounted() {
           console.log ('Component mounted.')
       },
        data(){
           return {
               show:true
           }
        },
        methods:{
           formSubmit(e){
               e.preventDefault();

                   axios.post(/applications/+this.jobid,{

                   }).then((response)=>{
                       this.show=false
                   });

           }
        }
    }
</script>

<style scoped>

</style>

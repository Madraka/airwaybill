<template>
    <div>
        <h1>Shipping Form</h1>
        <form @submit.prevent="createShipping">
            <input type="text" v-model="form.name" id="">
            
        </form>
    </div>
</template>
<script>
export default {
    data(){
        return{
            form: {
                'name': '',
            }
        }
    },
    methods:{
      createShipping(){
          this.form.post('/').then(res=>{
            console.log(res.body)
          })
      }  
    },
    mounted(){
        console.log("Mounted shipping component")
    }
}
</script>
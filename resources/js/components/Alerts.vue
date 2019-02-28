<template>
  <div class="">
    <h3>{{ msg }}</h3>
  </div>
</template>

<script>
export default {
  data(){
    return{
      msg: ''
    }
  },
  mounted() {
     // Listen for the 'NewBlogPost' event in the 'team.1' private channel
     this.$echo.private('PrealertChannel').listen('PrealertEvent', (payload) => {
         console.log(payload);
         this.msg = payload.tracking
     });
   },
  methods:{
    setAlert(param){
      this.msg = param
    }
  }
}
</script>

<style lang="css">
</style>

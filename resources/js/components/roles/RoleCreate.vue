<template>
  <div>
    <h3>Create New roles</h3>
    <hr>
    <form action="/api/roles" method="POST" class="">
        <div class="">
			<label for="name">Role</label>
			<input name="name" type="text" value="" v-model="name"/>
		</div>
		
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
    data() {
      return {
        name : ''
      };
},
created : function(){
  this.submitRole();
},
methods:{
  submitRole:function(){
    axios.get('/api/roles').then((response)=>{
      this.roles = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

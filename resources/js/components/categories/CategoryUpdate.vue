<template>
  <div>
    <h3>Create New categories</h3>
    <hr>
    <form action="/api/categories" method="POST" class="">
        <div class="">
			<label for="name">Name</label>
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
  this.submitCategory();
},
methods:{
  submitCategory:function(){
    axios.get('/api/categories').then((response)=>{
      this.categories = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

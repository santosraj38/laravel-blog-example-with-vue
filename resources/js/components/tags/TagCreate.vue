<template>
  <div>
    <h3>Create New tags</h3>
    <hr>
    <form action="/api/tags" method="POST" class="">
        <div class="">
			<label for="name">Tag Name</label>
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
  this.submitTag();
},
methods:{
  submitTag:function(){
    axios.get('/api/tags').then((response)=>{
      this.tags = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

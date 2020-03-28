<template>
  <div>
    <h3>Create New likes</h3>
    <hr>
    <form action="/api/likes" method="POST" class="">
        <div class="">
			<label for="post_id">posts</label>
			<select name="post_id" v-model="post_id"></select>
		</div>
		<div class="">
			<label for="like">Like</label>
			<input name="like" type="number" value="" v-model="like"/>
		</div>
		
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
    data() {
      return {
        post_id : '',
				like : ''
      };
},
created : function(){
  this.submitLike();
},
methods:{
  submitLike:function(){
    axios.get('/api/likes').then((response)=>{
      this.likes = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

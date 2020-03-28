<template>
  <div>
    <h3>Create New ratings</h3>
    <hr>
    <form action="/api/ratings" method="POST" class="">
        <div class="">
			<label for="post_id">posts</label>
			<select name="post_id" v-model="post_id"></select>
		</div>
		<div class="">
			<label for="rating">Rating</label>
			<input name="rating" type="number" value="" v-model="rating"/>
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
				rating : ''
      };
},
created : function(){
  this.submitRating();
},
methods:{
  submitRating:function(){
    axios.get('/api/ratings').then((response)=>{
      this.ratings = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

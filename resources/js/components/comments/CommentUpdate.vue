<template>
  <div>
    <h3>Create New comments</h3>
    <hr>
    <form action="/api/comments" method="POST" class="">
        <div class="">
			<label for="post_id">posts</label>
			<select name="post_id" v-model="post_id"></select>
		</div>
		<div class="">
			<label for="comment">Comment</label>
			<textarea name="comment" v-model="comment"></textarea>
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
				comment : ''
      };
},
created : function(){
  this.submitComment();
},
methods:{
  submitComment:function(){
    axios.get('/api/comments').then((response)=>{
      this.comments = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

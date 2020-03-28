<template>
  <div>
    <h3>Create New posts</h3>
    <hr>
    <form action="/api/posts" method="POST" class="">
        <div class="">
			<label for="category_id">categories</label>
			<select name="category_id" v-model="category_id"></select>
		</div>
		<div class="">
			<label for="coverimage">Cover Image</label>
			<input v-on:change="to_base64" name="coverimage" type="text" v-model="coverimage"/>
		</div>
		<div class="">
			<label for="title">Title</label>
			<input name="title" type="text" value="" v-model="title"/>
		</div>
		<div class="">
			<label for="body">Body</label>
			<textarea name="body" v-model="body"></textarea>
		</div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
    data() {
      return {
        category_id : '',
				coverimage : '',
				title : '',
				body : ''
      };
},
created : function(){
  this.submitPost();
},
methods:{
  submitPost:function(){
    axios.get('/api/posts').then((response)=>{
      this.posts = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

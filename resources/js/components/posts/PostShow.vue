<template>
  <div>
    <div v-if="post !=null" id="post">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="post.link">{{post.title}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{post.created_at}}
          </div>
          <div class="card-text">
            {{post.title}}<hr>
						{{post.body}}<hr>
						
          </div>
          <div class="actions">
            <router-link :to="'/posts/'+$route.params.slug/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/posts/'+$route.params.slug" class="btn btn-danger">Delete</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
      return {
        post : null,
      };
},
created : function(){
  this.fetchPost();
},
methods:{
  fetchPost:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/posts/'+slug).then((response)=>{
      this.post = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

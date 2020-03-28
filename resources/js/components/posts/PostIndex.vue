<template>
  <div v-if="blogs != null">
      <div v-for="post in posts">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="post.link">{{ post.title }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{post.created_at}}</h6>
            <div class="card-text">
              {{post.title}}<hr>
							{{post.body}}<hr>
							
            </div>
            <div class="action">
              <router-link :to="post.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="post.link+'/edit'" class="btn btn-success">Edit</router-link>
            </div>
          </div>
        </div><br>
      </div>
  </div>
</template>

<script>
export default {
    data() {
      return {
        posts : null,
      };
},
created : function(){
  this.fetchPosts();
},
methods:{
  fetchPosts:function(){
    axios.get('/api/posts').then((response)=>{
      this.posts = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

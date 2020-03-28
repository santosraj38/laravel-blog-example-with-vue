<template>
  <div v-if="blogs != null">
      <div v-for="comment in comments">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="comment.link">{{ comment.comment }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{comment.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="comment.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="comment.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        comments : null,
      };
},
created : function(){
  this.fetchComments();
},
methods:{
  fetchComments:function(){
    axios.get('/api/comments').then((response)=>{
      this.comments = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

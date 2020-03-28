<template>
  <div v-if="blogs != null">
      <div v-for="like in likes">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="like.link">{{ like.like }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{like.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="like.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="like.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        likes : null,
      };
},
created : function(){
  this.fetchLikes();
},
methods:{
  fetchLikes:function(){
    axios.get('/api/likes').then((response)=>{
      this.likes = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

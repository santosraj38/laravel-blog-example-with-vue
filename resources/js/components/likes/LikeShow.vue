<template>
  <div>
    <div v-if="like !=null" id="like">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="like.link">{{like.like}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{like.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/likes/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/likes/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        like : null,
      };
},
created : function(){
  this.fetchLike();
},
methods:{
  fetchLike:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/likes/'+slug).then((response)=>{
      this.like = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

<template>
  <div>
    <div v-if="comment !=null" id="comment">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="comment.link">{{comment.comment}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{comment.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/comments/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/comments/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        comment : null,
      };
},
created : function(){
  this.fetchComment();
},
methods:{
  fetchComment:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/comments/'+slug).then((response)=>{
      this.comment = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

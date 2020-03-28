<template>
  <div>
    <div v-if="rating !=null" id="rating">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="rating.link">{{rating.rating}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{rating.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/ratings/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/ratings/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        rating : null,
      };
},
created : function(){
  this.fetchRating();
},
methods:{
  fetchRating:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/ratings/'+slug).then((response)=>{
      this.rating = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

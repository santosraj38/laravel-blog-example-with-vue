<template>
  <div>
    <div v-if="category !=null" id="category">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="category.link">{{category.name}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{category.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/categories/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/categories/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        category : null,
      };
},
created : function(){
  this.fetchCategory();
},
methods:{
  fetchCategory:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/categories/'+slug).then((response)=>{
      this.category = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

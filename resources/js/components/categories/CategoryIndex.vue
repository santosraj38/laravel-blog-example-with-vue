<template>
  <div v-if="blogs != null">
      <div v-for="category in categories">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="category.link">{{ category.name }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{category.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="category.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="category.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        categories : null,
      };
},
created : function(){
  this.fetchCategories();
},
methods:{
  fetchCategories:function(){
    axios.get('/api/categories').then((response)=>{
      this.categories = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

<template>
  <div>
    <div v-if="tag !=null" id="tag">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="tag.link">{{tag.name}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{tag.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/tags/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/tags/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        tag : null,
      };
},
created : function(){
  this.fetchTag();
},
methods:{
  fetchTag:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/tags/'+slug).then((response)=>{
      this.tag = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

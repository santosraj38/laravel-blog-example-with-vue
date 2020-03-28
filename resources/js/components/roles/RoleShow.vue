<template>
  <div>
    <div v-if="role !=null" id="role">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3><router-link :to="role.link">{{role.name}}</router-link></h3>

          </div>
          <div class="card-subtitle mb-2 text-muted">
            {{role.created_at}}
          </div>
          <div class="card-text">
            
          </div>
          <div class="actions">
            <router-link :to="'/roles/'+$route.params.id/edit" class="btn btn-primary">Edit</router-link>
            <router-link :to="'/roles/'+$route.params.id" class="btn btn-danger">Delete</router-link>
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
        role : null,
      };
},
created : function(){
  this.fetchRole();
},
methods:{
  fetchRole:function(){
    var slug = this.$route.params.slug;

    axios.get('/api/roles/'+slug).then((response)=>{
      this.role = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

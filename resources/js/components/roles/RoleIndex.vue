<template>
  <div v-if="blogs != null">
      <div v-for="role in roles">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="role.link">{{ role.name }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{role.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="role.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="role.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        roles : null,
      };
},
created : function(){
  this.fetchRoles();
},
methods:{
  fetchRoles:function(){
    axios.get('/api/roles').then((response)=>{
      this.roles = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

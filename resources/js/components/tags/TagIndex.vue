<template>
  <div v-if="blogs != null">
      <div v-for="tag in tags">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="tag.link">{{ tag.name }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{tag.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="tag.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="tag.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        tags : null,
      };
},
created : function(){
  this.fetchTags();
},
methods:{
  fetchTags:function(){
    axios.get('/api/tags').then((response)=>{
      this.tags = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

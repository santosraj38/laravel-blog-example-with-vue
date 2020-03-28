<template>
  <div v-if="blogs != null">
      <div v-for="rating in ratings">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">
              <router-link :to="rating.link">{{ rating.rating }}</router-link>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">{{rating.created_at}}</h6>
            <div class="card-text">
              
            </div>
            <div class="action">
              <router-link :to="rating.link" class="btn btn-primary">Read more</router-link>
              <router-link :to="rating.link+'/edit'" class="btn btn-success">Edit</router-link>
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
        ratings : null,
      };
},
created : function(){
  this.fetchRatings();
},
methods:{
  fetchRatings:function(){
    axios.get('/api/ratings').then((response)=>{
      this.ratings = response.data.data;
    });
  },
}
}
</script>

<style lang="css" scoped>
</style>

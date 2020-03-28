<template>
  <div class="container">
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link to="#" class="nav-link">Home</router-link>
      </li>
      <li class="nav-item">
				<router-link to="/roles" class="nav-link">Roles</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/categories" class="nav-link">Categories</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/posts" class="nav-link">Posts</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/comments" class="nav-link">Comments</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/likes" class="nav-link">Likes</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/ratings" class="nav-link">Ratings</router-link>
			</li>
			<li class="nav-item">
				<router-link to="/tags" class="nav-link">Tags</router-link>
			</li>
			
    </ul>
  </div>
</nav>
  </div>
  </div>


</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
</style>

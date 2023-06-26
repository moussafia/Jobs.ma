<template>
  <div>
    <nav>
      <div class="n1">
        <div>
          <i id="menu-bar" class="fas fa-bars" @click="toggleSideBar"></i>
        </div>
        <div class="search">
          <i class="far fa-search"></i>
          <input type="text" placeholder="seach for a job" />
        </div>
      </div>
      <div class="profile">
        <i class="far fa-bell notification"></i>
        <div class="flex flex-col justify-center justify-center">
          <img src="../../assets/image/jobs/avatarProfile.png" />
          <button
            id="dropdownVousButton"
            data-dropdown-toggle="dropdownVous"
            class="flex items-center"
          >
            <p class="text-sm">vous</p>
            <i
              class="fa-duotone fa-caret-down text-sm px-0.5"
              style="--fa-secondary-opacity: 1"
            ></i>
          </button>
        </div>
      </div>
    </nav>
    <!---drop down--->
    <div
      id="dropdownVous"
      class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
    >
      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div>Bonnie Green</div>
        <div class="font-medium truncate">name@flowbite.com</div>
      </div>
      <ul
        class="py-2 text-sm text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownVousButton"
      >
        <li>
          <router-link to="/dashboard"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >Dashboard</router-link
          >
        </li>
        <li>
          <router-link to="/profile"
            href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >profile</router-link
          >
        </li>
      </ul>
      <div class="py-2">
        <a
          href="#"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
          >Sign out</a
        >
      </div>
    </div>
  </div>
</template>
<script>
export default{
    methods:{
        toggleSideBar(){
            this.$emit('toggleSideBar');
        }
    }
}
</script>
<style>
#interface nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  padding: 15px 15px 10px 30px;
  border-bottom: 3px solid #e02b60;
  position: fixed;
  width: calc(100% - 300px);
}
#interface nav .search {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 10px 10px 10px 14px;
  border: 1px solid #d7dbe6;
  border-radius: 4px;
  height: 40px;
}
#interface nav .search i {
  margin-right: 14px;
}
#interface nav .search input {
  border: none;
  outline: none;
  font-size: 14px;
  height: 100%;
}
#interface nav .profile {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
#interface nav .profile .notification {
  margin-right: 20px;
  font-size: 20px;
  cursor: pointer;
}
#interface nav .profile .notification:hover {
  cursor: pointer;
}
#interface nav .profile img {
  width: 25px;
  height: 25px;
  margin-left: 6px;
  border-radius: 50%;
  object-fit: cover;
}
.n1 {
  display: flex;
  justify-content: center;
  align-items: center;
}
#menu-bar {
  display: none;
  color: #2b2b2b;
  font-size: 20px;
  cursor: pointer;
  margin-right: 20px;
}
@media (max-width: 769px) {
  #menu-bar{
    display: initial;
  }
  #interface {
    width: 100%;
    margin-left: 0px;
    display: inline-block;
  }
  #interface .navigation {
    width: 100%;
  }
  .values {
    padding: 30px 30px 0 30px;
    justify-content: flex-start;
  }
}
@media (max-width: 586px){
  #interface nav {
  padding: 15px;
}
#interface nav .search input {
 width: 150px;
}
}
</style>

<template>
    <div>
        <nav>
      <div class="flex justify-center items-center">
        <img
          src="../../assets/image/landingPage/logo.png"
          style="height: 40px"
        />
        <h1 class="logo-color" style="">Jobs</h1>
      </div>
      <div class="n1">
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
        <!-- <li>
          <router-link
            to="/profile"
            href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >profile</router-link
          >
        </li> -->
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
<style>
.logo-color {
  font-weight: bold;
  color: #e60023;
  font-size: 22px;
  padding-top: 4px;
  letter-spacing: 1.3px;
  background-image: linear-gradient(to right, #a61a71, #e02b60);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

#jobs-home nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  padding: 15px 15px 10px 30px;
  border-bottom: 3px solid #e02b60;
  position: fixed;
  width: 100%;
  z-index: 1;
}
#jobs-home nav .search {
  display: flex;

  position: relative;
}
#jobs-home nav .search i {
  margin-right: 14px;
  position: absolute;
  color: #aeb2ba;
  top: 12px;
  left: 12px;
}
#jobs-home nav .search input {
  border: none;
  outline: none;
  font-size: 14px;
  justify-content: flex-start;
  align-items: center;
  border: 2px solid #d7dbe6;
  border-radius: 24px;
  height: 40px;
  width: 61vw;
  padding: 10px 10px 13px 33px;
}
#jobs-home nav .profile {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
#jobs-home nav .profile .notification {
  margin-right: 20px;
  font-size: 20px;
  cursor: pointer;
}
#jobs-home nav .profile .notification:hover {
  cursor: pointer;
}
#jobs-home nav .profile img {
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
  #menu-bar {
    display: initial;
  }
  #jobs-home {
    width: 100%;
    margin-left: 0px;
    display: inline-block;
  }
  #jobs-home .navigation {
    width: 100%;
  }
  .values {
    padding: 30px 30px 0 30px;
    justify-content: flex-start;
  }
}
@media (max-width: 586px) {
  #jobs-home nav {
    padding: 15px;
  }
  #jobs-home nav .search input {
    width: 150px;
  }
}
</style>
<template>
  <section id="sideBar">
    <div class="logo">
      <img src="../../assets/image/jobs/logo.png" />
      <h1>Jobs <sup>.ma</sup></h1>
    </div>
    <div class="items">
      <li>
        <i
          class="fa-duotone fa-chart-pie-simple"
          style="--fa-secondary-opacity: 1"
        ></i
        ><a href="index.html">Dashboard</a>
      </li>
      <li>
        <i class="fa-duotone fa-user" style="--fa-secondary-opacity: 1"></i
        ><a href="profile.html">profile</a>
      </li>
      <li>
        <i class="fa-duotone fa-briefcase" style="--fa-secondary-opacity: 1"></i
        ><a href="#">jobs</a>
      </li>
      <li>
        <i class="fa-duotone fa-bullhorn" style="--fa-secondary-opacity: 1"></i
        ><a href="#">Signalisation</a>
      </li>
    </div>
  </section>
</template>
<style>
#sideBar {
  background: #111827;
  width: 300px;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
}

#sideBar .logo {
  display: flex;
  align-items: center;
  padding: 25px 0 0 25px;
  color: #fff;
}
#sideBar .logo img {
  width: 45px;
}
#sideBar .logo h1 {
  font-size: 23px;
  font-weight: 700;
}
#sideBar .logo sup {
  font-size: 10px;
  font-weight: 600;
}
#sideBar .items {
  margin-top: 40px;
}
#sideBar .items li {
  list-style: none;
  padding: 15px 0;
  transition: 0.3s ease;
}
#sideBar .items li:hover {
  background: #253047;
  cursor: pointer;
}
#sideBar .items li:nth-child(1) {
  border-left: 2px solid #fff;
}

#sideBar .items li i {
  color: rgb(134, 141, 151);
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  font-size: 14px;
  margin: 0 10px 0 25px;
}

#sideBar .items li:hover i,
#sideBar .items li:hover a {
  color: #fff;
}
#sideBar .items li a {
  text-decoration: none;
  color: rgb(134, 141, 151);
  font-weight: 300px;
  transition: 0.3s ease;
}
@media (max-width:769px){
    #sideBar {
    width: 270px;
    position: fixed;
    left: -270px;
  }
  #sideBar.active{
    left: 0px;
  }
}
</style>

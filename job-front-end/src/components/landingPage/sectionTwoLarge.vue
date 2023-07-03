<template>
  <div class="notre-service" id="notre-service">
    <div class="images">
      <img src="../../assets/image/landingPage/ijtima3.jpg" />
      <img src="../../assets/image/landingPage/electr.jpg" />
      <img src="../../assets/image/landingPage/cv.jpg" />
      <img src="../../assets/image/landingPage/student.jpg" />
      <div>
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="chercher un job ici" />
      </div>
    </div>
    <div class="text-service">
      <h1>Notre service</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
        dolor iusto vel quibusdam molestiae fugiat, repellat numquam quaerat
        perspiciatis cumque? Nihil dignissimos quod fugiat nisi necessitatibus
        eaque amet magnam odit exercitationem enim? Eveniet, molestiae hic
        nostrum reprehenderit et earum deserunt.
      </p>
      <a href="#">Decouvrir des offres</a>
    </div>
  </div>
</template>
<style>
#notre-service {
  background-color: #fffd92;
  width: 100vw;
  height: 100vh;
  padding-right: 66px;
  opacity: 1 !important;
  z-index: 12 !important;
  box-shadow: 0px -20px 140px 100px #fff;
  margin-top: -230px;
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow:hidden !important;
}
#notre-service .images {
  width: 50%;
  position: absolute;
}

#notre-service .images img {
  object-fit: cover;
  border-radius: 15%;
}

#notre-service .images img:nth-child(1) {
  width: 241px;
  height: 160px;
  position: absolute;
  z-index: 1;
  transform: translate(120%, -146%);
}

#notre-service .images img:nth-child(2) {
  width: 187px;
  height: 201px;
  position: absolute;
  z-index: 1;
  transform: translate(50%, -37%);
}

#notre-service .images img:nth-child(3) {
  width: 288px;
  height: 416px;
  position: absolute;
  z-index: 2;
  transform: translate(60%, -47%);
}

#notre-service .images img:nth-child(4) {
  width: 250px;
  height: 200px;
  position: absolute;
  z-index: 1;
  transform: translate(112%, 30%);
}

#notre-service .images div {
  width: 202px;
  position: absolute;
  top: 12px;
  left: 224px;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 1rem;
  border: 1px solid #d7dbe6;
  border-radius: 30px;
  background: #fff;
  z-index: 2;
}

#notre-service .images div i {
  margin-right: 0.8rem;
}

#notre-service .images div input {
  border: none;
  outline: none !important;
  font-size: 0.9rem;
  height: 100%;
  width: 100%;
}
.text-service {
  width: 50%;
  color: #c31952;
  text-align: center;
  position: absolute;
  right: 3%;
}
.text-service h1 {
  font-size: 70px;
  font-weight: 700;
}
.text-service p {
  font-size: 19px;
  margin: 1.2em 0;
}
.text-service a {
  font-size: 19px;
  font-weight: 700;
  color: #fffd92;
  background: #c31952;
  padding: 4px 10px;
  border-radius: 104px;
}
@media only screen and (max-width: 1140px) {
  #notre-service {
    height: 130vh;
  }
  #notre-service .images {
    flex-basis: 100%;
    height: 50%;
  }
  .text-service {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 0px 4px 72px 0px;
  }
  .text-service h1 {
  font-size: 50px;
    }
  #notre-service .images img:nth-child(1) {
    transform: translate(90%, -146%);
  }

  #notre-service .images img:nth-child(2) {
    transform: translate(20%, -37%);
  }

  #notre-service .images img:nth-child(3) {
    transform: translate(50%, -47%);
  }

  #notre-service .images img:nth-child(4) {
    transform: translate(90%, 30%);
  }

  #notre-service .images div {
    transform: translate(-87%, -50%);
  }
}
</style>

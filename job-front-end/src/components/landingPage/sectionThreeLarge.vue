<template>
  <div class="sommes-nous" id="propos">
    <div class="text">
      <h1>Qui sommes-nous?</h1>
      <p>
        Cette section peut être utilisée pour présenter votre entreprise, son
        histoire, sa mission et ses valeurs. Vous pouvez expliquer ce qui vous
        motive en tant qu'entreprise et ce qui vous différencie des autres. Vous
        pouvez également parler de votre équipe, mettre en avant les membres
        clés et leurs compétences. N'hésitez pas à inclure des photos ou des
        vidéos pour rendre la section plus attrayante visuellement.
      </p>
      <a href="https://www.geekfact.ma/">Explorer</a>
    </div>
    <div class="images">
      <div class="image-container">
        <img src="../../assets/image/landingPage/geekFactResponsive.JPG" />
        <img src="../../assets/image/landingPage/geekFactProfile.jpg" />
        <a href="https://www.geekfact.ma/">geekfact.ma</a>
      </div>
    </div>
  </div>
</template>
<style>
.sommes-nous {
  z-index: 12;
  width: 100vw;
  height: 103vh;
  background: #ffe2eb;
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.sommes-nous .images {
  width: 50%;
  height: 100%;
  position: relative;
}
.sommes-nous .images .image-container {
  background-image: url("../../assets/image/landingPage/geekFactWeb.JPG");
  background-size: cover;
  background-position: center top;
  padding-bottom: 595px;
  margin-left: 42px;
}
.sommes-nous .images .image-container img:nth-child(1) {
  height: 375px;
  width: 217px;
  border-radius: 38px;
  position: absolute;
  left: 105px;
  bottom: 82px;
  z-index: 1;
}
.sommes-nous .images .image-container img:nth-child(2) {
  height: 91px;
  width: 91px;
  border-radius: 50%;
  position: absolute;
  left: 71px;
  bottom: 32px;
  z-index: 2;
}
.sommes-nous .images .image-container a {
  text-decoration: none;
  position: absolute;
  left: 167px;
  bottom: 58px;
  z-index: 2;
  color: #fff;
  font-size: 19px;
  font-weight: 600;
}
.sommes-nous .text {
  width: 50%;
  color: #c31952;
  text-align: center;
}
.sommes-nous .text h1 {
  font-size: 70px;
  font-weight: 700;
}
.sommes-nous .text p {
  font-size: 19px;
  margin: 1.2em 0;
}
.sommes-nous .text a {
  font-size: 19px;
  font-weight: 700;
  color: #ffe2eb;
  background: #c31952;
  padding: 4px 10px;
  border-radius: 104px;
}
@media only screen and (max-width: 1140px) {
  .sommes-nous {
    flex-wrap: wrap;
    height: 150vh;
  }
  .sommes-nous .images {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
  }
  .sommes-nous .text {
    width: 100%;
    position: absolute;
    bottom: -6px;
    padding: 30px;
  }
  .sommes-nous .text h1 {
    font-size: 40px;
  }
  .sommes-nous .images .image-container {
  margin-left: 0px;
}
}
</style>

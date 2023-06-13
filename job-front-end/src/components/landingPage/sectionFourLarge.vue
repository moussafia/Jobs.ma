<template>
  <div class="sign-up">
    <div class="back" style=""></div>
    <div class="w-full h-full content">
      <p>Inscrivez-vous pour postuler à des offres</p>
      <a href="#nav">
        <div
          class="absolute rounded-full px-4 py-3 flex justify-center items-center px-2"
          style="background: #9c0343"
        >
          <i
            class="fa-solid fa-greater-than text-white"
            style="transform: rotate(-90deg); font-size: 20px; font-weight: 700"
          ></i>
        </div>
      </a>
      <form
        action=""
        class="flex flex-col items-center justify-center form-sign-up"
      >
        <img src="../../assets/image/landingPage/logo.png" class="py-1" />
        <h1>Bienvenue sur jobs.ma !</h1>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
        <div class="flex flex-col items-start">
          <label for="">First name</label>
          <input type="text" placeholder="First name" />
          <label for="">Last name</label>
          <input type="text" placeholder="Last name" />
          <label for="">Email</label>
          <input type="email" placeholder="email" />
          <label for="">Password</label>
          <input type="password" placeholder="Password" />
          <label for="">Confirmer password</label>
          <input type="password" placeholder="Confirmer password" />
        </div>
        <a href="" class="inscrire">S'inscrire</a>
      </form>
    </div>
  </div>
</template>
<style>
.sign-up{
  width:100vw;
  height:130vh;
  background-image: url('../../assets/image/landingPage/ijtima3.jpg');
  background-size: cover;
  background-position: center top;
  position:relative;
 }
 .sign-up .back{
  height:100%;
  width:100%;
 position:absolute;
 background-color:rgba(0, 0, 0, 0.4);
  top:0;
 }
 .sign-up .content{
  z-index:1; 
  display:flex;
  justify-content:space-around;
  align-items:center;
  color:#000;
  padding:10px 0;
}
.sign-up .content h1{
  font-size: 27px;
  font-weight: 600;
}
.sign-up .content p:nth-child(1){
  font-size: 56px;
  font-weight: 500;
  color: #fff;
  z-index: 2;
  overflow-wrap: break-word;
  padding: 21px 29px 0 39px;
  width: 40%;
}
.form-sign-up{
background:#fff;
border-radius:46px;
color:#000;
padding: 67px 66px 57px 77px;
height:100%;
z-index:3;
}
.form-sign-up img{
  height: 61px;
  width: 64px;
  border-radius:50%
}
.form-sign-up label{
  text-align:start;
  padding: 15px 0 4px 10px;
  font-size: 14px;  
}
.form-sign-up input{
  padding: 14px 70px 13px 12px;
  border-radius: 17px;
  border-width: 2.9px;
  border-color: #9ea2a7;
}
.form-sign-up .inscrire{
  background-image: linear-gradient(to right, #a61a71, #e02b60);
  border-radius: 20px; 
  padding: 8px 16px;
  border: none;
  color: white;
  font-size: 14px;
  font-weight:600;
  letter-spacing: 1.3px;
  width:85%;
  text-align:center;
  margin-top:8px;
}
.form-sign-up .inscrire:hover{
  background-image: linear-gradient(to right, #6a164a, #a43757);
}
</style>
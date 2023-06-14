<template>
  <div class="sign-up" id="sign-up">
    <div class="back" style=""></div>
    <div class="w-full h-full content">
      <p>Inscrivez-vous pour postuler à des offres</p>
      <a href="#nav" @click="handleScroll">
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
      <signup/>
    </div>
  </div>
</template>
<script>
import smoothScroll from "../../assets/js/index.js";
import signup from "./forms/signUP.vue"
export default {
  components:{
    signup: signup
  },
    methods: {
        handleScroll(event){
            smoothScroll(event)
        }
    }
}
// $('#form-sign-up').parsley();

</script>
<style>
.parsley-errors-list {
  color: red; 
}
.sign-up{
  width:100vw;
  height:130vh;
  background-image: url('../../assets/image/landingPage/ijtima3.jpg');
  background-size: cover;
  background-position: center top;
  position:relative;
  z-index: 9999;
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
</style>
<template>
  <!-- Modal Se connecter -->
  <div id="seconnecterModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative max-w-2xl max-h-full countainer-modal">
          <!-- Modal content -->
          <form action="" class="flex flex-col items-center justify-center form-log-in relative">
            <button type="button" class="absolute text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="seconnecterModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
                <img src="../../../assets/image/landingPage/logo.png" class="py-1">
                <h1>Bienvenue sur jobs.ma !</h1>
                <div class="flex flex-col items-start">
                    <label for="">Email</label>
                    <input type="email" placeholder="email">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password">
                    <a href="" class="MDPoublier">Mot de passe oublié ? </a>
                </div>
                <a href="" class="connecterForm">Se connecter</a>
          </form>
      </div>
   </div>
</template>
<style scoped>

    .countainer-modal{
    width: 39%
}
.form-log-in{
  background:#fff;
  border-radius:46px 46px;
  color:#000;
  padding: 1px 66px 57px 77px;
  height:100%;
  z-index:3;
}
.form-log-in button{
  top: 12px;
  right: 24px;
}
.form-log-in img{
  height: 61px;
  width: 64px;
  border-radius:50%;
  margin-top:38px ;
}
.form-log-in h1{
  font-size: 29px;
  font-weight: 600;
  padding-bottom: 12px;
}
.form-log-in label{
  text-align:start;
  padding: 15px 0 4px 10px;
  font-size: 14px;  
}
.form-log-in input{
  padding: 10px 205px 8px 11px;  border-radius: 17px;
  border-width: 2.9px;
  border-color: #9ea2a7;
}
.form-log-in .MDPoublier{
  font-weight: 500;
  padding: 10px 0 12px 0;
  font-size: 14px;
}
.form-log-in .MDPoublier:hover{
text-decoration:underline;
cursor:pointer;
}
.form-log-in .connecterForm{
  background-image: linear-gradient(to right, #a61a71, #e02b60);
  border-radius: 20px; 
  padding: 8px 16px;
  border: none;
  color: white;
  font-size: 14px;
  font-weight:600;
  letter-spacing: 1.3px;
  width:75%;
  text-align:center;
  margin-top:8px;
}
.form-log-in .connecterForm:hover{
  background-image: linear-gradient(to right, #6a164a, #a43757);
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
.countainer-modal{
    width: 77%
} 
.form-log-in h1{
    font-size: 32px;
}
.form-log-in input{
    padding: 10px 247px 8px 11px;
}
}

@media only screen and (min-width: 577px) and (max-width: 768px) {
.countainer-modal{
    width: 83%
} 
.form-log-in h1{
    font-size: 27px;
}
.form-log-in input{
    padding: 10px 107px 8px 11px;
}
}

@media only screen and (max-width: 576px) {
.countainer-modal{
    width: 93%
} 
.form-log-in h1{
    font-size: 19px;
}
.form-log-in input{
    padding: 10px 60px 8px 11px;
}
.form-log-in .connecterForm{
  font-size: 12px;
}
}
</style>
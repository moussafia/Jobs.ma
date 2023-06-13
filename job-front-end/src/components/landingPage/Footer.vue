<template>
       <footer class="flex items-center">
        <a>Conditions d'utilisation</a>
        <a>Politique de confidentialité</a>
        <a>Aide</a>
        <a>Application iPhone</a>
        <a>Application Android</a>
        <a>Utilisateurs</a>
        <a>Collections</a>
        <a>Aujourd'hui</a>
        <a>Explorer</a>
    </footer>
</template>
<style>
footer{
  justify-content:center;
}
footer a{
  font-size: 13px;
  font-weight: 500;
  padding: 12px 28px 10px 1px;
}
footer a:hover{
  text-decoration:underline;
  cursor:pointer;
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
  margin-top: 15px;
}
.form-log-in img{
  height: 61px;
  width: 64px;
  border-radius:50%
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
  padding: 14px 70px 13px 12px;
  border-radius: 17px;
  border-width: 2.9px;
  border-color: #9ea2a7;
}
.form-log-in .MDPoublier{
  font-weight: 500;
  padding: 2px 0 12px 0;
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
</style>
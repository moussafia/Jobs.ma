<template>
        <nav class="flex py-8 justify-between items-center" id="nav">
            <div class="flex justify-center items-center">
                <img src="../../assets/image/landingPage/logo.png" style="height: 40px;">
                <h1 class="logo-color" style="">Jobs</h1>
            </div>
            <div class="flex items-center items-nav-left">
                <div class="flex items-center" id="items-nav">
                    <a href="">À propos</a>
                    <a href="">Jobs</a>
                    <a href="">Notre service</a>
                </div>
                <div class="gap-2">
                    <button class="btn-connecter"
                    data-modal-target="seconnecterModal" data-modal-toggle="seconnecterModal">Log IN</button>
                    <div class="module-border-wrap">
                        <a href="#" class="btn-signUp">sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
        <fromSignIn/>
</template>
<script>
import fromSignIn from './forms/signIn.vue'
export default{
    name: 'navBar',
    components: {
        fromSignIn: fromSignIn
    }
}
</script>
<style scoped>
.logo-color{
    font-weight:bold;
    color:#e60023;
    font-size:22px;
    letter-spacing: 1.3px;
    background-image: linear-gradient(to right, #a61a71, #e02b60);
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent; 
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
nav {
    padding-left: 20px;
    padding-right: 20px;
}
#items-nav{
    gap: 30px;
}

#items-nav a {
    font-weight:600;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    letter-spacing: 1.3px;
}
#items-nav a:hover {
    text-decoration:underline;
}
.btn-connecter{
    background: linear-gradient(to right, #a61a71, #e02b60);
    border-radius: 20px; 
    padding: 8px 16px;
    border: none;
    color: white;
    font-size: 14px;
    font-weight:600;
    letter-spacing: 1.3px;
    width: 98px;
}
.btn-connecter:hover{
    background: linear-gradient(to right, #6a164a, #a43757);
}
.items-nav-left{
    gap:40px
}
.module-border-wrap{
  padding: 6px 2px 2px 2px;
  position: relative;
  background: linear-gradient(to right, #a61a71, #e02b60);
  border-radius: 20px; 

}
.btn-signUp{
    border-radius: 20px; 
    background: white;
    padding: 8px 16px;
    color: #000;
    font-size: 14px;
    font-weight:600;
    letter-spacing: 1.3px;

}
.btn-signUp:hover{
    color: white;
    background: linear-gradient(to right, #a61a71, #e02b60);
}
.gap-2{
    display: flex;
    gap:9px;
}
@media only screen and (max-width:768px ) {
    #items-nav{
        display: none;
    }
}
</style>
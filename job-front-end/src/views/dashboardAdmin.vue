<template>
    <div id="dashboardAdmin">
        <section id="sideBar">
        <div class="logo">
            <img src="logo.png">
            <h1>Jobs <sup>.ma</sup> </h1>
        </div>
        <div class="items">
            <li><i class="fa-duotone fa-chart-pie-simple" style="--fa-secondary-opacity: 1;"></i><a
                    href="index.html">Dashboard</a></li>
            <li><i class="fa-duotone fa-user" style="--fa-secondary-opacity: 1;"></i><a href="profile.html">profile</a>
            </li>
            <li><i class="fa-duotone fa-briefcase" style="--fa-secondary-opacity: 1;"></i><a href="#">jobs</a></li>
            <li><i class="fa-duotone fa-bullhorn" style="--fa-secondary-opacity: 1;"></i><a href="#">Signalisation</a>
            </li>

        </div>
    </section>
    <section id="interface">
        <nav>
            <div class="n1">
                <div class="search">
                    <i class="far fa-search"></i>
                    <input type="text" placeholder="seach for a job">
                </div>
            </div>
            <div class="profile">
                <i class="far fa-bell notification"></i>
                <div class="flex flex-col justify-center justify-center">
                    <img src="I.jpg">
                    <button id="dropdownVousButton" data-dropdown-toggle="dropdownVous" class="flex items-center ">
                        <p class="text-sm">vous</p>
                        <i class="fa-duotone fa-caret-down text-sm px-0.5" style="--fa-secondary-opacity: 1;"></i>
                    </button>
                </div>
            </div>
        </nav>
        <h3 class="i-name">
            Dashboard
        </h3>
        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8</h3>
                    <span>new condidats</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8</h3>
                    <span>new condidats</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8</h3>
                    <span>new condidats</span>
                </div>
            </div>
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>nom d'entreprise</td>
                        <td>title d'offre</td>
                        <td>nombre de candidats</td>
                        <td>date d'offre</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomEntreprise">
                            <img src="avatarEntre.png" alt="">
                            <a href="#">
                                <h5>Geeck Fact</h5>
                            </a>
                        </td>
                        <td class="Title Offre">
                            <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                        </td>
                        <td class="active">
                            <p>30 condidats</p>
                        </td>
                        <td class="date">
                            <p>2023-12-09</p>
                        </td>
                        <td class="UD">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </section>
    <a href="#" id="add-jobs" data-modal-target="modal-add-jobs" data-modal-toggle="modal-add-jobs">
        <i class="fa-solid fa-plus"></i>
        <span> New job</span>
    </a>
    <!---drop down--->
    <div id="dropdownVous"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>Bonnie Green</div>
            <div class="font-medium truncate">name@flowbite.com</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownVousButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">profile</a>
            </li>
        </ul>
        <div class="py-2">
            <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
        </div>
    </div>
    <!---modal pop up-->
    <div id="modal-add-jobs" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative max-w-2xl max-h-full" id="container-add-jobs">
            <!-- Modal content -->
            <form action="" id="from-add-jobs" class="flex flex-col justify-center items-center relative">
                <button type="button"
                    class="absolute
                    text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="modal-add-jobs"
                    style="top:9px;right: 20px;">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <h1 class="text-3xl text-bold py-2 absolute" style="font-weight: 600;top:32px;">
                    ADD New Jobs!
                </h1>
                <div class="step flex flex-col justify-center items-start w-full">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="dropzone-file-label">
                            <div class="upload-image">
                                <img src="entr.png" class="py-1">
                                <i class="fa-duotone fa-cloud-arrow-up"
                                    style="--fa-primary-color: #ffffff; --fa-secondary-color: #213250; --fa-secondary-opacity: 1;"></i>
                            </div>
                            <input id="dropzone-file" name="cover" type="file" class="hidden" />
                        </label>
                    </div>
                    <label for="">Title</label>
                    <input type="text">
                    <label for="">Nom de l'entreprise</label>
                    <select multiple="multiple" class="hi">
                        <option>youCode</option>
                        <option>geeckfact</option>
                        <option>free</option>
                    </select>
                </div>
                <div class="step w-full">
                    <label for="">Description</label>
                    <textarea name="description" id="description-add-job"></textarea>
                </div>
                <div class="step w-full">
                    <label for="">Type contrat</label>
                    <select multiple="multiple" class="hi">
                        <option>cdi</option>
                        <option>cdd</option>
                        <option>freeLane</option>
                    </select>
                    <label for="">Localisation</label>
                    <select class="hi" multiple="multiple">
                        <option>safi</option>
                        <option>white</option>
                        <option>youssoufia</option>
                    </select>
                    <label for="">Domaine</label>
                    <select class="hi" multiple="multiple">
                        <option>genie electrique</option>
                        <option>white</option>
                        <option>genie mecanique</option>
                    </select>
                    <label for="">Technologie Requies</label>
                    <select class="hi" multiple="multiple">
                        <option>php</option>
                        <option>js</option>
                        <option>html</option>
                    </select>
                </div>
                <div class="step w-full">
                    <input type="text">dgjdsgjsdmlkgj
                </div>
                <div class="flex justify-end gap-2 items-center w-full">
                    <button class="btn-form-add mx-2 previousBtn" id="prevBtn" onclick="nextPrev(-1)"> previous</button>
                    <button class="btn-form-add" onclick="nextPrev(1)"
                    id="nextBtn"></button>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step-span"></span>
                    <span class="step-span"></span>
                    <span class="step-span"></span>
                    <span class="step-span"></span>
                </div>
            </form>
        </div>
    </div>
    </div>
</template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
#dashboardAdmin{
    width: 100%;
    background: #E5E7EB ;
    position: relative;
    display: flex;
}
#sideBar{
    background: #111827;
    width:300px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
}
#sideBar .logo{
    display: flex;
    align-items: center;
    padding: 25px 0 0 25px;
    color: #fff;
   
}
#sideBar .logo img{
    width:45px;
}
#sideBar .logo h1{
    font-size: 23px;
    font-weight: 700;
}
#sideBar .logo sup{
    font-size: 10px;
    font-weight: 600;
}
#sideBar .items{
    margin-top: 40px;
}
#sideBar .items li{
    list-style: none;
    padding: 15px 0;
    transition: 0.3s ease;

}
#sideBar .items li:hover{
   background: #253047;
   cursor: pointer;
}
#sideBar .items li:nth-child(1){
    border-left: 2px solid #fff;
 }

#sideBar .items li i{
   color:rgb(134, 141, 151);
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align:center;
    font-size: 14px;
    margin: 0 10px 0 25px;
}

#sideBar .items li:hover i,
#sideBar .items li:hover a{
    color: #fff;
 }
#sideBar .items li a{
    text-decoration: none;
    color:rgb(134, 141, 151);
    font-weight: 300px;
    transition: 0.3s ease;
 }
 #interface{
     width: calc(100% - 300px);
     margin-left: 300px;
     position: relative;
 }

 #interface nav{
     display: flex;
     align-items: center;
     justify-content: space-between;
     background: #fff;
     padding: 15px 15px 10px 30px;
     border-bottom: 3px solid #594ef7;
     position: fixed;
     width: calc(100% - 300px);
 }
 #interface nav .search{    
     display: flex;
     justify-content: flex-start;
     align-items: center;
     padding: 10px 10px 10px 14px;
    border: 1px solid #d7dbe6;
    border-radius: 4px;
    height: 40px;
 }
 #interface nav .search i{    
    margin-right: 14px;
}
 #interface nav .search input{    
    border: none;
    outline: none;
    font-size: 14px;
    height: 100%;
}
#interface nav .profile{
display: flex;
justify-content: flex-start;
align-items: center;
}
#interface nav .profile .notification{
    margin-right: 20px;
    font-size: 20px;
    cursor: pointer;
}
#interface nav .profile .notification:hover{
    cursor: pointer;
}
#interface nav .profile img{
    width:25px;
    height: 25px;
    margin-left: 6px;
    border-radius: 50%;
    object-fit: cover;
}

.i-name{
    color: #444a53;
    padding: 30px 30px 0 30px;
    font-size: 24px;
    font-weight: 700;
    margin-top: 70px;
}
.values{
    padding: 30px 30px 0 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.values .val-box{
   background:#fff;
   width: 235px;
   padding: 16px 20px;
   border-radius: 5px;
   display: flex;
   justify-content: flex-start;
   align-items: center; 
}
.values .val-box i{
    font-size: 25px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    margin-right: 15px;
}
.values .val-box:nth-child(1) i{
   background: #7B74EC;
}
.values .val-box:nth-child(2) i{
    background: #5C8AF0;
}
 .values .val-box:nth-child(3) i{
    background: #74daec;
} 

.values .val-box h3{
    font-size: 18px;
   font-weight: 600;
}
.values .val-box span{
    font-size: 15px;
   font-weight: 600;
}
.board{
    width: 94%;
    margin: 30px 0 30px 30px;
    overflow: auto;
    background: #fff;
    border-radius: 8px;
}
.board img{
    width: 45px;
    height: 45px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 15px;
}
.board h5{
    font-weight: 600;
    font-size: 14px;
}
.board p{
    font-weight: 400;
    font-size: 13px;
    color: #787d8d;
}
.board .nomEntreprise{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    text-align: start;
}
table{
    border-collapse: collapse;
}
tr{
    border: 1px solid #eef0f3;
}

thead td{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 400;
    background: #F9FAFB;
    text-align: start;
    padding: 15px;
}
tbody tr td{
    padding: 10px 15px;
}
tbody tr .nomEntreprise a:hover{
    text-decoration: underline;
}
.active p{
    background: #d7fada;
    padding: 2px 10px;
    display: inline-block;
    border-radius:  40px;
    color: #2b2b2b;
}
.UD a{
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    display: block;
    row-gap: 10px;
}
.UD a:hover{
    text-decoration: underline;
}
.UD a:nth-child(1){
    color: #554cd1;
}
.UD a:nth-child(2){
    color: #d14c7f;
}
.pagination {
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:12px;
  }
  
.pagination a {
    color: black;
    float: left;
    padding: 5px 13px;
    text-decoration: none;
    border-radius:100%;
    }
  
  .pagination a.active {
    background-color: #4CAF50;
    color: white;
  }
  
  .pagination a:hover:not(.active) {
    background-color: #ddd;
}
#add-jobs{
    padding: 10px 16px;
    color: #fff;
    position: fixed;
    bottom: 4%;
    right: 4%;
    cursor: pointer;
    border-radius: 30px;
    background-color: green;
    gap:6px;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: moveIcon 1.6s infinite alternate;

}
  @keyframes moveIcon {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-20px);
    }
    100% {
      transform: translateY(0);
    }
  }
  #add-jobs span{
    font-weight:500
  }
  #add-jobs i{
    color:white;
    font-weight:bold
  }
  #container-add-jobs{
    width: 40%;
    height: 90vh;
    overflow-y: auto;
    overflow-x: hidden;
  }
  #from-add-jobs{
    background:#fff;
    border-radius:46px;
    color:#000;
    padding: 14px 63px 40px 64px;
    height:100%;
    }
    #from-add-jobs img{
        height: 141px;
        width: 173px;
        border-radius: 100%;
    }
    .dropzone-file-label{
        cursor: pointer;
        height: 141px;
        width: 173px;
    }
    .upload-image{
        position: relative;
    }
    .upload-image i{
        position: absolute;
        right: -5px;
        bottom: 0;
        font-size: 50px;
        opacity: 0.9;
    }
    #from-add-jobs label{
      text-align:start;
      padding: 15px 0 4px 10px;
      font-size: 14px;  
    }
    #from-add-jobs input{
        padding: 3px 70px 2px 12px;
        width: 100%;
        border-radius: 12px;
        border-width: 2px;
        border-color: #9ea2a7;
    }
    #description-add-job{
        padding: 3px 70px 2px 12px;
        width: 100%;
        height: 40vh;
        border-radius: 12px;
        border-width: 2px;
        border-color: #9ea2a7;
        overflow-y: auto;
        overflow-x: hidden;
    }
    .select2-container{
        width: 100% !important;
        border-radius: 12px;
        border-width: 2px;
        border-color: #9ea2a7;
    }
    .select2-container--default .select2-selection--multiple {
        background-color: transparent !important;
        border: none !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__display{
        background: #111827 !important;
        color:white;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background: #111827 !important;
        color:white;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: white !important;
    }
    .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
    background: #74daec !important;
    }
    #from-add-jobs .btn-form-add{
      background-image: linear-gradient(to right, #a61a71, #e02b60);
      border-radius: 20px; 
      padding: 8px 16px;
      border: none;
      color: white;
      font-size: 14px;
      font-weight:600;
      letter-spacing: 1.3px;
      width: 30%;
      text-align: center;
      margin-top: 42px;
    }
    #from-add-jobs .btn-form-add:hover{
      background-image: linear-gradient(to right, #6a164a, #a43757);
    }
    .previousBtn{
       background: #bbbbbb !important;
    }
    
    .previousBtn:hover {
        opacity: 0.8;
    }
    .step-span {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;  
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    } 
    .step-span.active {
    opacity: 1;
    }
    .step-span.finish {
    background-color: #04AA6D;
    }
    .step {
        display: none;
        margin-top: 92px;
      }
</style>
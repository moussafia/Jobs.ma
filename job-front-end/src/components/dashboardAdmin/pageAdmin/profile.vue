<template>
  <div id="profileAdmin">
    <h3 class="i-name">Profile</h3>
    <div class="values">
      <div class="profile-section flex justify-start gap-6">
        <div class="img">
          <img src="" class="h-full w-full" />
        </div>
        <div class="child-profile">
          <div class="definition-p flex justify-between">
            <div>
              <h1 class="name">mohammed mohammed</h1>
              <p><i class="fa-solid fa-location-dot"></i> safi, Morocco</p>
            </div>
            <a href="" id="editProfile" title="Edit profile">
              <i class="fa-regular fa-pen-to-square" ></i>
              <span>Edit profile</span></a
            >
          </div>
          <p class="decription">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum
            
          </p>
        </div>
      </div>
      <div class="cards-statistique flex flex-col items-center justify-center">
        <i class="fa-solid fa-suitcase text-gray-700" ></i>
        <p>jobs that you share</p>
        <span>30 jobs</span>
        <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
#profileAdmin {
  min-height: 88vh;
}
#profileAdmin .values{
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-right:10px ;
}
#profileAdmin .i-name {
  color: #444a53;
  padding: 30px 30px 0 30px;
  font-size: 24px;
  font-weight: 700;
  margin-top: 70px;
}
#profileAdmin .cards-statistique{
    background: #fff;
    padding: 10px 13px 10px 14px;
    box-shadow: 0px 0px 8px #00000070;
    border-radius:20px;
    width: 211px;
    height: 280px;
    gap: 12px;
}
#profileAdmin .cards-statistique i{
    font-size:53px ;
}
#profileAdmin .cards-statistique p{
    font-size:19px ;
    font-weight:700 ;
    text-align: center;
}
#profileAdmin .cards-statistique span{
    font-size:13px ;
    font-weight: 700;
    color: #636989;
}
#profileAdmin .cards-statistique .stars{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3px;
}
#profileAdmin .cards-statistique .stars i{
    font-size: 15px;
    color: #e32e35;
}
#profileAdmin .profile-section {
  width: 70%;
  padding: 53px 6px 12px 45px;
}
#profileAdmin .profile-section .img {
  height: 145px;
  width: 240px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  overflow: hidden;
  box-shadow: 0px 0px 10px #00000070;
}
.profile-section .img img {
  object-fit: cover;
}
.definition-p {
  padding-top: 15px;
  overflow-wrap: break-word;
}
#profileAdmin .definition-p h1 {
  font-size: 19px;
  font-weight: 600;
}
#profileAdmin .definition-p p {
  color: #7f8393;
  text-indent: 5px;
}
#profileAdmin .child-profile .decription {
  font-size: 13px;
  padding-top: 14px;
  text-indent: 19px;
}
#editProfile {
  color: #fff;
  background: #0d8afb;
  padding: 7px 16px 7px 14px;
  border-radius: 36px;
  font-size: 13px;
  font-weight: 500;
  align-self: flex-start;
}
#editProfile:hover {
  background: hwb(208 2% 6%);
  cursor: pointer;
}
@media (max-width: 1112px) {
    #editProfile span {
  display: none;
}
}
</style>

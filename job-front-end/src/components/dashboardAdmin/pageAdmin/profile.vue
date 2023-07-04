<template>
  <div id="profileAdmin">
    <h3 class="i-name">Profile</h3>
    <div class="values">
      <div class="profile-section flex justify-start gap-6">
        <div class="img">
          <img src="" class="h-full w-full" />
        </div>
        <div class="child-profile">
          <div class="definition-p flex items-center">
            <div>
              <h1 class="name">mohammed mohammed</h1>
              <p>
                <i class="fa-solid fa-location-dot"></i>
                <span> safi, Morocco</span>
              </p>
            </div>
            <a
              href="#edit-profile-section"
              @click="scrollDown"
              title="Edit profile"
              id="editProfile"
            >
              <i class="fa-regular fa-pen-to-square"></i>
              <span>Edit profile</span></a
            >
          </div>
          <p class="decription">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum
          </p>
        </div>
      </div>
      <div class="cards-statistique flex flex-col items-center justify-center">
        <i class="fa-solid fa-suitcase text-gray-700"></i>
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
    <form
      class="flex flex-wrap justify-center edit-profile-section w-full"
      ref="EPSection"
    >
      <div class="flex items-center img-profile">
        <label for="dropzone-file" class="dropzone-profile-label">
          <div class="upload-image-profile">
            <img src="../../../assets/image/jobs/avatarProfile.png" />
            <i
              class="fa-duotone fa-cloud-arrow-up"
              style="
                --fa-primary-color: #ffffff;
                --fa-secondary-color: #213250;
                --fa-secondary-opacity: 1;
              "
            ></i>
          </div>
          <input id="dropzone-file" name="cover" type="file" class="hidden" />
        </label>
      </div>
      <div class="flex flex-col inputs-edit-section">
        <label for="name">First name</label>
        <input type="text" />
        <label for="name">Last name</label>
        <input type="text" />
        <label for="Email">Email</label>
        <input type="text" />
        <label for="password">password</label>
        <input type="text" />
      </div>
      <button class="btn-edit-submit">Edit</button>
    </form>
  </div>
</template>
<script>
export default {
  methods: {
    scrollDown() {
      const targetDiv = this.$refs.EPSection;
      window.scrollTo({
        top: targetDiv.offsetTop,
        behavior: "smooth",
      });
    },
  },
};
</script>
<style>
#profileAdmin {
  min-height: 88vh;
}
#profileAdmin .values {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin-right: 10px;
  align-items: center;
  margin: 53px;
}
#profileAdmin .i-name {
  color: #444a53;
  padding: 30px 30px 0 30px;
  font-size: 24px;
  font-weight: 700;
  margin-top: 70px;
}
#profileAdmin .cards-statistique {
  background: #fff;
  padding: 10px 13px 10px 14px;
  box-shadow: 0px 0px 8px #00000070;
  border-radius: 20px;
  width: 211px;
  height: 280px;
  gap: 12px;
}
#profileAdmin .cards-statistique i {
  font-size: 53px;
}
#profileAdmin .cards-statistique p {
  font-size: 19px;
  font-weight: 700;
  text-align: center;
}
#profileAdmin .cards-statistique span {
  font-size: 13px;
  font-weight: 700;
  color: #636989;
}
#profileAdmin .cards-statistique .stars {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3px;
}
#profileAdmin .cards-statistique .stars i {
  font-size: 15px;
  color: #e32e35;
}
#profileAdmin .profile-section {
  width: auto;
}
#profileAdmin .profile-section .img {
  height: 109px;
  width: 109px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  overflow: hidden;
  box-shadow: 0px 0px 10px #00000070;
}
.profile-section .img img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}
.definition-p {
  overflow-wrap: break-word;
  gap: 30px;
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
  width: 90%;
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
.edit-profile-section {
  padding: 20px 60px;
}
.edit-profile-section .inputs-edit-section {
  width: calc(100% - 95px);
  padding: 0 10px 0 70px;
}
.edit-profile-section .inputs-edit-section label {
  padding-top: 10px;
  padding-left: 11px;
  font-size: 15px;
}
.edit-profile-section .inputs-edit-section input {
  width: 100%;
  border-radius: 12px;
}
.edit-profile-section .img-profile {
  width: 95px;
}
.dropzone-profile-label {
  cursor: pointer;
  height: 131px;
  width: 153px;
}
.upload-image-profile {
  position: relative;
  box-shadow: 0px 0px 8px #00000070;
  border-radius: 100%;
}
.upload-image-profile img {
  width: 100%;
  border-radius: 100%;
}
.upload-image-profile i {
  position: absolute;
  right: -5px;
  bottom: 0;
  font-size: 25px;
  opacity: 0.9;
}
form .btn-edit-submit {
  margin-top: 38px;
  background: #0d8afb;
  padding: 6px 36px;
  border-radius: 50px;
  color: #fff;
  font-weight: 500;
}
form .btn-edit-submit:hover {
  background-image: linear-gradient(to right, #3542, #5674);
}
@media (max-width: 1112px) {
  #editProfile span {
    display: none;
  }
}
@media (max-width: 1044px) {
  #profileAdmin .values {
    flex-wrap: wrap;
  }
  #profileAdmin .cards-statistique {
    box-shadow: 0px 0px 2px #00000070;
    width: 412px;
    height: 193px;
    display: flex;
    margin: auto;
    margin-top: 56px;
    padding: 0px;
  }
}
@media (max-width: 769px) {
  #profileAdmin .definition-p h1 {
    font-size: 13px;
  }

  #profileAdmin .cards-statistique p {
    font-size: 12px;
  }
  #profileAdmin .child-profile .decription {
    font-size: 11px;
  }
  #profileAdmin .definition-p p span {
    font-size: 12px;
  }
  .edit-profile-section .inputs-edit-section {
    width: 100%;
    padding: 0;
  }
}
@media (max-width: 600px) {
  #profileAdmin .profile-section .img {
    height: 78px;
    width: 109px;
  }
}
</style>

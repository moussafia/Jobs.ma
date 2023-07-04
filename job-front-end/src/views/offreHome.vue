<template>
  <div id="jobs-home">
    <navBar></navBar>
    <div id="cards-job">
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
      <div class="card-job">
        <img src="../assets/image/offres/ycd.jpg" />
        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
        <div class="overaly">
          <i class="fa-sharp fa-solid fa-eye show-icon"></i>
          <span>
            <i class="fa-solid fa-arrow-up-right"></i>
            Ouvrir
          </span>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import navBar from "../components/pageOffre/navBar.vue";
export default {
  components: {
    navBar: navBar,
  },
};
</script>
<style>
#cards-job {
  padding: 100px 7px 0 9px;
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  align-items: center;
  justify-content: center;
}
#cards-job .card-job {
  height: 376px;
  width: 240px;
  background: white;
  cursor: pointer;
  position: relative;
}
#cards-job .card-job img {
  border-radius: 20px;
  height: 87%;
  object-fit: unset;
}
#cards-job .card-job h3 {
  font-size: 12px;
  text-align: center;
  padding-top: 4px;
}
#cards-job .card-job .overaly {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 87%;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 20px;
  opacity: 0;
  transition: opacity 0.3s ease;
}
#cards-job .card-job:hover .overaly {
  opacity: 0.9;
}
#cards-job .card-job .overaly .show-icon {
  position: absolute;
  top: 42%;
  left: 50%;
  transform: translate(-50%, 50%);
  color: #fff;
  font-size: 30px;
  opacity: 0;
  transition: opacity 0.3s ease;
}
#cards-job .card-job:hover .overaly .show-icon {
  opacity: 1;
}
#cards-job .card-job .overaly span {
  position: absolute;
  bottom: 6px;
  left: 16px;
  color: #fff;
  font-size: 13px;
  font-weight: 600;
  opacity: 0;
  transition: opacity 0.3s ease;
}
#cards-job .card-job:hover .overaly span {
  opacity: 1;
}
</style>

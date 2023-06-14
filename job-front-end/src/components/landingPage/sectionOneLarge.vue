<template>
  <div class="" id="sectionLargeOne" style="padding-top: 80px">
    <div class="flex justify-center section1">
      <h1 class="font-blod text-center">
        Trouvez ici plusieurs offres dans différents domaines
      </h1>
    </div>
    <div class="flex flex-col items-center">
      <div class="sweeper-title">
        <div v-if="index === 0">
          <h1 class="text-center title-domaine text-green-500">
            Génie électrique et mécanique
          </h1>
        </div>
        <div v-if="index === 1">
          <h1 class="text-center title-domaine text-blue-500">
            Information Technology IT
          </h1>
        </div>
        <div v-if="index === 2">
          <h1 class="text-center title-domaine text-red-400">
            Domaine de la gestion
          </h1>
        </div>
      </div>
      <div class="flex pt-6 gap-2">
        <button
          type="button"
          class="btn-sweaper rounded-full"
          @click="changeIndex(0)"
          :class="index == 0 ? 'bg-green-500' : ' bg-gray-500'"
        ></button>
        <button
          type="button"
          class="btn-sweaper rounded-full"
          :class="index == 1 ? 'bg-blue-500' : ' bg-gray-500'"
          @click="changeIndex(1)"
        ></button>
        <button
          type="button"
          class="btn-sweaper rounded-full"
          :class="index == 2 ? 'bg-red-400' : ' bg-gray-500'"
          @click="changeIndex(2)"
        ></button>
      </div>
      <div class="sweeper">
        <div>
          <div class="cards-sweapers sweeper1 flex">
            <div class="card showCards" :key="index">
              <img style="height: 100%; width: 100%" ref="imgSweaper1" />
            </div>
            <div class="flex justify-center crd2">
              <div class="card showCards" :key="index">
                <img style="height: 100%; width: 100%" ref="imgSweaper2" />
              </div>
              <div
                class="relative flex justify-center"
                style="
                  padding-top: 70px;
                  padding-left: 5px;
                  padding-right: 66px;
                "
              >
                <a href="#notre-service" >
                  <div
                    class="absolute icon-drop-down flex justify-center items-center px-2"
                    :class="
                      index == 0
                        ? 'bg-green-500'
                        : index === 1
                        ? 'bg-blue-500'
                        : 'bg-red-400'
                    "
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-5 h-5 svg-icons"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5"
                      />
                    </svg>
                  </div>
                </a>
              </div>
              <div class="card showCards" :key="index">
                <img style="height: 100%; width: 100%" ref="imgSweaper3" />
              </div>
            </div>
            <div class="card showCards delayed" :key="index">
              <img style="height: 100%; width: 100%" ref="imgSweaper4" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      cards: [
        {
          imgSource: [
            "energie.jpg",
            "automatisation.jpg",
            "electronique.jpg",
            "Fabrication-mécanique.jpg",
          ],
        },
        {
          imgSource: ["it1.jpg", "it2.jpg", "it3.jpg", "it4.jpg"],
        },
        {
          imgSource: [
            "gestion1.jpg",
            "gestion2.jpg",
            "gestion3.jpg",
            "gestion4.jpg",
          ],
        },
      ],
      index: 0,
    };
  },
  mounted() {
    this.imgSrcSweaper();
    setInterval(() => {
      this.index = this.index < 2 ? this.index + 1 : 0;
    }, 6000);
  },
  updated() {
    this.imgSrcSweaper();
  },
  methods: {
    imgSrcSweaper() {
      const imgSrc = this.cards[this.index].imgSource;
      this.$refs.imgSweaper1.src =
        "../../src/assets/image/landingPage/" + imgSrc[0];
      this.$refs.imgSweaper2.src =
        "../../src/assets/image/landingPage/" + imgSrc[1];
      this.$refs.imgSweaper3.src =
        "../../src/assets/image/landingPage/" + imgSrc[2];
      this.$refs.imgSweaper4.src =
        "../../src/assets/image/landingPage/" + imgSrc[3];
    },
    changeIndex(i) {
      this.index = i;
    }
  },
};
</script>
<style>
#sectionLargeOne {
  overflow: hidden !important;
}
.section1 h1 {
  font-size: 38px;
  font-weight: 600;
  font-family: Arial, Helvetica, sans-serif;
  letter-spacing: 1.3px;
}

.cards-sweaper {
  display: flex;
  gap: 10px;
  padding-top: 1px;
}

.card {
  width: 250px;
  height: 400px;
  margin-right: 10px;
  border-radius: 80px;
  opacity: 0;
  transform: translateY(80px);
}

.sweeper1 .showCards:nth-child(1) {
  animation-delay: 0.5s;
}

.crd2 .showCards:nth-child(1) {
  animation-delay: 1s;
}

.sweeper1 .delayed {
  animation-delay: 2s;
}

.showCards {
  transform: translateY(0);
  animation: showCard 2s ease-in-out forwards;
}

@keyframes showCard {
  0% {
    opacity: 0;
    transform: translateY(80px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.card img {
  background-image: cover;
  object-fit: cover;
  object-position: center;
  border-radius: 20px;
}

.title-domaine {
  padding-top: 20px;
  font-size: 30px;
  font-weight: 600;
  animation: showTitle 0.5s ease-in-out forwards;
}

@keyframes showTitle {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.icon-drop-down {
  cursor: pointer;
  z-index: 14 !important;
  border-radius: 100%;
  width: 45px;
  height: 45px;
  margin-left: 10px;
  margin-right: 10px;
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

.svg-icons {
  color: white;
  font-weight: bold;
}

.crd2 {
  padding-top: 60px;
  gap: 40px;
}

.btn-sweaper {
  width: 9px;
  height: 9px;
}

.sweaper {
  z-index: 10 !important;
  position: relative;
}
</style>

<template>
  <div>
    <!---modal pop up-->
    <div
      id="modal-add-jobs"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative max-w-2xl max-h-full" id="container-add-jobs">
        <!-- Modal content -->
        <form
          action=""
          id="from-add-jobs"
          class="flex flex-col justify-center items-center relative"
        >
          <button
            type="button"
            class="absolute text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="modal-add-jobs"
            style="top: 9px; right: 20px"
          >
            <svg
              aria-hidden="true"
              class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <h1
            class="text-3xl text-bold py-2 absolute"
            style="font-weight: 600; top: 32px"
          >
            ADD New Jobs!
          </h1>
          <div class="step flex flex-col justify-center items-start w-full">
            <div class="flex items-center justify-center w-full mb-8">
              <label for="dropzone-file" class="dropzone-file-label">
                <div class="upload-image">
                  <img src="../../../assets/image/jobs/entr.png" class="py-1" />
                  <i
                    class="fa-duotone fa-cloud-arrow-up"
                    style="
                      --fa-primary-color: #ffffff;
                      --fa-secondary-color: #213250;
                      --fa-secondary-opacity: 1;
                    "
                  ></i>
                </div>
                <input
                  id="dropzone-file"
                  name="cover"
                  type="file"
                  class="hidden"
                />
              </label>
            </div>
            <label for="">Title</label>
            <input type="text" />
            <label for="">Nom de l'entreprise</label>
            <select multiple="multiple" ref="SelectInput0">
              <option>youCode</option>
              <option>geeckfact</option>
              <option>free</option>
            </select>
          </div>
          <div class="w-full step">
            <label for="">Description</label>
            <textarea name="description" id="description-add-job"></textarea>
            <label for="">Salaire(Optionnel)</label>
            <input type="text" />
          </div>
          <div class="w-full mt-2 step">
            <label for="">Type contrat</label>
            <select multiple="multiple" ref="SelectInput1">
              <option>cdi</option>
              <option>cdd</option>
              <option>freeLane</option>
            </select>
            <label for="">Localisation</label>
            <select ref="SelectInput2" multiple="multiple">
              <option>safi</option>
              <option>white</option>
              <option>youssoufia</option>
            </select>
            <label for="">Domaine</label>
            <select ref="SelectInput3" multiple="multiple">
              <option>genie electrique</option>
              <option>white</option>
              <option>genie mecanique</option>
            </select>
            <label for="">Technologie Requies</label>
            <select ref="SelectInput4" multiple="multiple">
              <option>php</option>
              <option>js</option>
              <option>html</option>
            </select>
          </div>
          <div class="step w-full overflow-x-auto">
            <div class="py-6" id="pargraphForms">
              <div id="row1">
                <label
                  for="small-input"
                  class="block mb-1 mt-1 text-sm font-medium text-gray-900 dark:text-white"
                  >Question</label
                >
                <textarea
                  name="paragraph[]"
                  class="paragraphs w-full block rounded-lg overflow-x-hidden overflow-y-auto border border-gray-300 bg-gray-50"
                >
                </textarea>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <label class="font-medium text-sm text-gray-900 dark:text-white" style="padding-bottom: 16px;"
                >Add Question</label
              >
              <button
                class="flex rounded-lg text-white items-center justify-center addParagr"
                type="button"
                @click="add_parag();"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="flex flex-col w-full absolute btm-form">
            <div class="flex justify-end gap-2 items-center w-full">
              <button
                class="btn-form-add mx-2 previousBtn"
                ref="prevBtn"
                @click.prevent="stepsAddJobShow(-1)"
              >
                previous
              </button>
              <button
                class="btn-form-add"
                @click.prevent="stepsAddJobShow(1)"
                ref="nextBtn"
              >
                {{ this.TextbtnAddForm }}
              </button>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align: center; margin-top: 12px">
              <span class="step-span"></span>
              <span class="step-span"></span>
              <span class="step-span"></span>
              <span class="step-span"></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      selectInputs: [],
      currentIndexStep: 0,
      TextbtnAddForm: "Next",
    };
  },
  mounted() {
    this.populateSelectInputs();
    this.initializeSelect2(), this.InitialSteps(this.currentIndexStep);
  },
  methods: {
    populateSelectInputs() {
      this.selectInputs.push(this.$refs.SelectInput0);
      this.selectInputs.push(this.$refs.SelectInput1);
      this.selectInputs.push(this.$refs.SelectInput2);
      this.selectInputs.push(this.$refs.SelectInput3);
      this.selectInputs.push(this.$refs.SelectInput4);
    },
    initializeSelect2() {
      this.selectInputs.forEach((ref, index) => {
        let maximumSelectionLength = null;
        if (index == 0 || index == 1 || index == 3) {
          maximumSelectionLength = 1;
        } else {
          maximumSelectionLength = null;
        }
        $(ref).select2({
          tags: true,
          tokenSeparators: [",", " "],
          maximumSelectionLength: maximumSelectionLength,
        });
      });
    },
    InitialSteps(n) {
      let DivSteps = document.getElementsByClassName("step");
      DivSteps[this.currentIndexStep].style.display = "block";
      if (n == 0) {
        $(this.$refs.prevBtn)[0].style.display = "none";
      } else {
        $(this.$refs.prevBtn)[0].style.display = "inline";
      }
      if (n == DivSteps.length - 1) {
        this.TextbtnAddForm = "ADD Job";
      } else {
        this.TextbtnAddForm = "Next";
      }
      this.fixStepIndicator(n);
    },
    stepsAddJobShow(n) {
      let DivSteps = document.getElementsByClassName("step");
      DivSteps[this.currentIndexStep].style.display = "none";
      this.currentIndexStep = this.currentIndexStep + n;
      //validation
      if (this.currentIndexStep >= DivSteps.length) {
        document.getElementById("from-add-jobs").submit();
        this.currentIndexStep = 0;
        return false;
      } else {
        this.InitialSteps(this.currentIndexStep);
      }
    },
    fixStepIndicator(n) {
      let stepsInd = document.getElementsByClassName("step-span");
      stepsInd[n].classList.add("finish");
      stepsInd[n].classList.add("active");
      for (let i = n + 1; i < stepsInd.length; i++) {
        stepsInd[i].classList.remove("finish");
      }
    },
  },
};
</script>
<style>
#container-add-jobs {
  width: 40%;
  height: 90vh;
  overflow-y: auto;
  overflow-x: hidden;
}
#from-add-jobs {
  background: #fff;
  border-radius: 46px;
  color: #000;
  padding: 0 64px;
  height: 100%;
}
#from-add-jobs img {
  height: 141px;
  width: 173px;
  border-radius: 100%;
}
.dropzone-file-label {
  cursor: pointer;
  height: 131px;
  width: 163px;
}
.upload-image {
  position: relative;
}
.upload-image i {
  position: absolute;
  right: -5px;
  bottom: 0;
  font-size: 50px;
  opacity: 0.9;
}
#from-add-jobs label {
  text-align: start;
  padding: 15px 0 4px 10px;
  font-size: 14px;
}
#from-add-jobs input {
  padding: 3px 70px 2px 12px;
  width: 100%;
  border-radius: 12px;
  border-width: 2px;
  border-color: #9ea2a7;
}
#description-add-job {
  padding: 3px 70px 2px 12px;
  width: 100%;
  height: 40vh;
  border-radius: 12px;
  border-width: 2px;
  border-color: #9ea2a7;
  overflow-y: auto;
  overflow-x: hidden;
}
.select2-container {
  width: 100% !important;
  border-radius: 12px;
  border-width: 2px;
  border-color: #9ea2a7;
}
.select2-container--default .select2-selection--multiple {
  background-color: transparent !important;
  border: none !important;
}
.select2-container--default
  .select2-selection--multiple
  .select2-selection__choice__display {
  background: #e02b60;
  color: white;
}
.select2-container--default
  .select2-selection--multiple
  .select2-selection__choice {
  background: #e02b60;
  color: white;
}
.select2-container--default
  .select2-selection--multiple
  .select2-selection__choice__remove {
  color: white !important;
}
.select2-container--default
  .select2-results__option--highlighted.select2-results__option--selectable {
  background: #e02b60;
}
#from-add-jobs .btn-form-add {
  background-image: linear-gradient(to right, #a61a71, #e02b60);
  border-radius: 20px;
  padding: 8px 16px;
  border: none;
  color: white;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1.3px;
  width: 30%;
  text-align: center;
  margin-top: 20px;
}
#from-add-jobs .btn-form-add:hover {
  background-image: linear-gradient(to right, #6a164a, #a43757);
}
.previousBtn {
  background: #bbbbbb !important;
}

.previousBtn:hover {
  opacity: 0.8;
}

.step-span {
  height: 14px;
  width: 14px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.active {
  opacity: 1;
}
.finish {
  background-color: #04aa6d;
}
.step {
  display: none;
}
.btm-form {
  bottom: 10px;
  right: 34px;
}
.addParagr{
  background-image: linear-gradient(to right, #6a164a, #a43757);
    width: 18px;
    height: 18px;
}
@media (max-width: 1700px) {
  #container-add-jobs {
    width: 90vh;
  }
}
@media (max-width: 500px) {
  #container-add-jobs {
    width: 100%;
  }
}
</style>

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
            <div class="flex items-center justify-center w-full">
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
          </div>
          <div class="w-full">
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
          <div class="step w-full"><input type="text" />dgjdsgjsdmlkgj</div>
          <div class="flex justify-end gap-2 items-center w-full">
            <button
              class="btn-form-add mx-2 previousBtn"
              id="prevBtn"
              onclick="nextPrev(-1)"
            >
              previous
            </button>
            <button
              class="btn-form-add"
              onclick="nextPrev(1)"
              id="nextBtn"
            ></button>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align: center; margin-top: 40px">
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
<script>
export default{
  data(){
    return {
      selectInputs:[]
    }
  },
  mounted(){
    this.populateSelectInputs()
    this.initializeSelect2()

  },
  methods:{
    populateSelectInputs(){
      this.selectInputs.push(this.$refs.SelectInput0);
      this.selectInputs.push(this.$refs.SelectInput1);
      this.selectInputs.push(this.$refs.SelectInput2);
      this.selectInputs.push(this.$refs.SelectInput3);
      this.selectInputs.push(this.$refs.SelectInput4);
    },
    initializeSelect2(){
      this.selectInputs.forEach((ref)=>{
        $(ref).select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
      })
    }
  }
}
</script>
<style>
#from-add-jobs {
  background: #fff;
  border-radius: 46px;
  color: #000;
  padding: 69px 63px 0px 64px;
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
    background-image: linear-gradient(to right, #a61a71, #e02b60);
  color: white;
}
.select2-container--default
  .select2-selection--multiple
  .select2-selection__choice {
    background-image: linear-gradient(to right, #a61a71, #e02b60);
  color: white;
}
.select2-container--default
  .select2-selection--multiple
  .select2-selection__choice__remove {
  color: white !important;
}
.select2-container--default
  .select2-results__option--highlighted.select2-results__option--selectable {
    background-image: linear-gradient(to right, #a61a71, #e02b60);
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
  margin-top: 42px;
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
</style>

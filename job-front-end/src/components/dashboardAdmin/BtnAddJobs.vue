<template>
  <div>
    <a
      href="#"
      id="add-jobs"
      data-modal-target="modal-add-jobs"
      data-modal-toggle="modal-add-jobs"
    >
      <i class="fa-solid fa-plus"></i>
      <span> New job</span>
    </a>
  </div>
  <FormAddJobs />
</template>
<script>
import FormAddJobs from "./forms/addJobs.vue";
export default {
  name: "btnAddJobs",
  components: {
    FormAddJobs: FormAddJobs,
  },
};
</script>
<style>
#add-jobs {
  padding: 10px 16px;
  color: #fff;
  position: fixed;
  bottom: 4%;
  right: 4%;
  cursor: pointer;
  border-radius: 30px;
  background-color: green;
  gap: 6px;
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
#add-jobs span {
  font-weight: 500;
}
#add-jobs i {
  color: white;
  font-weight: bold;
}
#container-add-jobs {
  width: 40%;
  height: 90vh;
  overflow-y: auto;
  overflow-x: hidden;
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
  background-color: #04aa6d;
}
.step {
  display: none;
  margin-top: 92px;
}
</style>

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
  background-image: linear-gradient(to right,#a91b70, #d82862);;
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


</style>

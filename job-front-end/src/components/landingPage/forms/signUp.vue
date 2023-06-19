<template>
  <form
    id="form-sign-up"
    @submit.prevent="submitForm"
    class="flex flex-col items-center justify-center form-sign-up"
    data-parsley-validate
  >
    <img src="../../assets/image/landingPage/logo.png" class="py-1" />
    <h1>Bienvenue sur jobs.ma !</h1>
    <p class="text-center">
      Trouvez ici toutes les offres d'emploi <br />
      qui vous conviennent.
    </p>
    <div class="flex flex-col items-start">
      <label for="">First name</label>
      <input
        type="text"
        placeholder="First name"
        v-model="first_name"
        data-parsley-required
        data-parsley-pattern="^[a-zA-Z\s]+$"
      />
      <label for="">Last name</label>
      <input
        type="text"
        placeholder="Last name"
        v-model="last_name"
        data-parsley-required
        data-parsley-pattern="^[a-zA-Z\s]+$"
      />
      <label for="">Email</label>
      <input
        type="email"
        placeholder="email"
        v-model="email"
        data-parsley-required
      />
      <label for="">Password</label>
      <input
        type="password"
        placeholder="Password"
        id="password"
        v-model="password"
        data-parsley-required
      />
      <label for="">Confirmer password</label>
      <input
        type="password"
        placeholder="Confirmer password"
        v-model="password_confirmation"
        data-parsley-required
        data-parsley-equalto="#password"
        data-parsley-trigger="change"
      />
    </div>
    <button type="submit" class="inscrire">S'inscrire</button>
  </form>
</template>
<script>
import api from '../../../assets/js/api.js'
export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      password: "",
      password_confirmation: "",
    };
  },
  created() {
    console.log(api);
  },
  methods: {
    async submitForm() {
      const userData = {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
      };
      try {
        const response = await api.post(
          "auth/register",
          userData
        );
        console.log(response.data);
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>
<style>
.form-sign-up {
  background: #fff;
  border-radius: 46px;
  color: #000;
  padding: 67px 66px 57px 77px;
  height: 100%;
  z-index: 3;
}
.form-sign-up img {
  height: 61px;
  width: 64px;
  border-radius: 50%;
}
.form-sign-up label {
  text-align: start;
  padding: 15px 0 4px 10px;
  font-size: 14px;
}
.form-sign-up input {
  padding: 14px 70px 13px 12px;
  border-radius: 17px;
  border-width: 2.9px;
  border-color: #9ea2a7;
}
.form-sign-up .inscrire {
  background-image: linear-gradient(to right, #a61a71, #e02b60);
  border-radius: 20px;
  padding: 8px 16px;
  border: none;
  color: white;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1.3px;
  width: 85%;
  text-align: center;
  margin-top: 8px;
}
.form-sign-up .inscrire:hover {
  background-image: linear-gradient(to right, #6a164a, #a43757);
}
</style>

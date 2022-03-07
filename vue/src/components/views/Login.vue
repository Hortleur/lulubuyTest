<script setup>
import { useUserStore } from "../../store/useUser";
import { ref } from "vue";

const userStore = useUserStore();

const signUp = ref(false);
const name = ref("");
const email = ref("");
const password = ref("");
const confirm = ref("");
let badPassword = false;

if (password.value != confirm.value) {
  badPassword = true;
}

const signIn = () => {
  userStore.login(email.value, password.value);
};
const registerForm = () => {};
</script>

<template>
  <main>
    <div class="border-2 border-emerald-500 mx-2 py-4 my-24">
      <div v-if="!signUp">
        <h1 class="text-2xl font-bold">Créer son compte</h1>
        <p class="text-lg">
          Déja un compte ?
          <span
            @click="signUp = !signUp"
            class="text-base cursor-pointer hover:text-emerald-500"
            >Se connecter</span
          >
        </p>
      </div>
      <div v-else>
        <h1 class="text-2xl font-bold">Se connecter</h1>
        <p class="text-lg">
          Pas de compte ?
          <span
            @click="signUp = !signUp"
            class="text-base cursor-pointer hover:text-emerald-500"
            >S'inscrire</span
          >
        </p>
      </div>

      <div v-if="!signUp" class="flex flex-col flex-nowrap justify-between my-2">
        <input
          type="text"
          name="name"
          v-model="name"
          placeholder="Nom"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />

        <input
          type="email"
          name="email"
          v-model="email"
          placeholder="Email"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />

        <input
          type="password"
          name="password"
          v-model="password"
          placeholder="Mot de passe"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />

        <input
          type="password"
          name="confirm"
          v-model="confirm"
          placeholder="Mot de passe"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />
        <p v-if="this.badPassword">Confirmez votre Mot de passe</p>

        <button
          @click="registerForm"
          class="mt-2 ring-1 bg-emerald-500 text-emerald-50 w-1/2 mx-auto rounded-md text-lg font-semibold"
        >
          S'inscrire
        </button>
      </div>
      <div v-else class="flex flex-col flex-nowrap justify-between my-2">
        <input
          type="email"
          name="email"
          v-model="email"
          placeholder="Email"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />

        <input
          type="password"
          name="password"
          v-model="password"
          placeholder="Mot de passe"
          class="p-1 bg-emerald-500 text-emerald-50 font-semibold placeholder:text-emerald-50 my-1 w-2/3 mx-auto"
        />

        <button
          class="mt-2 ring-1 bg-emerald-500 text-emerald-50 w-1/2 mx-auto rounded-md text-lg font-semibold"
          @click="signIn"
        >
          Se connecter
        </button>
      </div>
    </div>
  </main>
</template>

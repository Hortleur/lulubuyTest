<script setup>
import { useProductStore } from "../../store/useProduct";
import { useRouter } from "vue-router";
import { storeToRefs } from "pinia";

const chemin = useRouter();

const productStore = useProductStore();
productStore.getProduct();

const { filtredProd } = storeToRefs(productStore);

function loadMore() {
  productStore.$patch((state) => (state.affichage += 10));
  productStore.getProduct();
}

function login() {
  chemin.push("/login");
}
</script>

<template>
  <main>
    <h1 class="text-3xl font-bold text-center">Produits</h1>
    <div class="mx-2 lg:flex lg:flex-row lg:flex-wrap lg:justify-evenly">
      <div v-for="product in filtredProd" class="lg:w-1/4 mx-2">
        <div class="border-2 border-emerald-400 my-2 rounded-lg">
          <div class="border-b-2 border-b-amber-500">
            <h2 class="text-lg">
              {{ product.product_model }}
            </h2>
            <span
              v-if="product.product_model_alt"
              class="border-t-2 border-t-amber-500"
              >{{ product.product_model_alt }}</span
            >
          </div>
          <div class="border-b-2 border-b-amber-500">
            <h2>{{ product.product_brand }}</h2>
          </div>
          <div class="py-1">
            <button
              @click="login"
              class="ring-1 ring-emerald-500 p-2 rounded-xl bg-gradient-to-tl from-emerald-600 to-emerald-50 font-semibold my-1"
            >
              Plus de détails
            </button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <button
        @click="loadMore"
        class="ring-1 ring-emerald-500 p-2 rounded-xl bg-gradient-to-tl from-emerald-600 to-emerald-50 font-semibold my-1"
      >
        Load More
      </button>
    </div>
  </main>
</template>

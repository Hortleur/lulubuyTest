<script setup>
import { useProductStore } from "../../store/useProduct";

const { product_id } = useProductStore();
</script>

<template>
  <div>
    <p v-if="product_id === null">I's Alive</p>
  </div>
</template>

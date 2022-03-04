import { defineStore } from "pinia";
import axios from "axios";
const api = axios.create({
    baseURL: "http://lulubuytest.test/api",
})

export const useProductStore = defineStore("product", {
    state: ()=> ({ products: []   }),
    getters: {
        
    } ,
    actions: {
       async getProduct() {
            await api.get('/product')
           .then ((res) => 
                this.products = res.data
           ).catch((error) => {
               return(this.error = error)
           })
       }
    }
})
import axios from "axios";
import { defineStore } from "pinia";
const instance = axios.create({
    baseURL: 'http://localhost:8000/api'
})

export const useProductStore = defineStore("product", {
    state: ()=> { 
        return {
            products: [] ,
            affichage: 30
        }
    },
    getters: {
       filtredProd(){
           return this.products = this.products.filter(product => product.id < this.affichage)
       },
       
       
    },
    actions: {
        getProduct(){
            instance.get('/product')   
            .then(res => {
                this.products = res.data
            })                  
            .catch(err => {
                console.log(err)
            })    
       },
        addProduct(){
             this.affichage += 10
        }
       
    }
})
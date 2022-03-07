import { defineStore } from "pinia";
import { ref, computed } from "vue";
import axios from "axios";

const instance = axios.create({
    baseURL: 'http://localhost:8000/api'
})


export const useUserStore = defineStore("user", () => {
    const user = ref({
        loged: false,
        name: "",
        email:"",
        user:"",
        token:""
    });

     const login = async (newEmail, newPassword) => {
         const email = json.parse(newEmail)
         const password = json.parse(newPassword)
        await instance.post('/login',{
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            email ,
            password
        })
        .then(res => {
            if(res.status === 200){
                user.value.user = res.data.user,
                user.value.token = res.data.token
            }
        })
        .catch(err => {
            console.log(err)
        })
    }

    return {
       login,
        user
    }
});

/*{
    state:()=>{
        return {
            loged: false,
            name:null,
            email:null,
            password:null,
            confirm:null,
            token:null,
            user:null

        }
    },
    actions:{
        async login(){
            await instance.post('/login', {
                email,
                password
            })
            .then(res => {
                if(res.status === 200 ){
                    this.loged = true
                    this.token = res.data.token
                    this.user = res.data.user
                } else {
                    console.log(res.status)
                }
            })
            .catch(err => {
                console.log(err)
            })
        }
    }*/

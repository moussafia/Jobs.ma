import axios from 'axios'
import Cookies from 'js-cookie';
const api=axios.create({
    baseURL: 'http://localhost:8000/api/',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json'
    }
});

api.interceptors.request.use(
    (config)=>{
        const jwt_token =Cookies.get('jwt_token')
        if(jwt_token){
            config.headers.Authorization=`Bearer ${jwt_token}`
        }
        return config
    },
    (error)=>{
        return Promise.reject(error)
    }
)

export default api;
import axios from "axios";
import Cookies from "js-cookie";
let csrfToken=null;
const api = axios.create({
  baseURL: "http://localhost:8000/api/",
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
  },
});

api.interceptors.request.use(
  async (config) => {
    const jwt_token = Cookies.get("jwt_token");
    if (jwt_token) {
      config.headers.Authorization = `Bearer ${jwt_token}`;
    }
    if (config.method == "post" || config.method == "put") {
      const token = await fetchCsrfToken();
      config.headers["X-CSRF-TOKEN"] = token;
      console.log(`token=${token},header=${config.headers}`);

    }
    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);
async function fetchCsrfToken() {
  return new Promise((resolve, reject) => {
    if (csrfToken) {
      resolve(csrfToken);
    } else {
      axios
        .get("http://localhost:8000/api/csrfToken")
        .then((response) => {
          csrfToken = response.data.csrf_token;
          resolve(csrfToken);
        })
        .catch((error) => {
          reject(error);
        });
    }
  });
}

export default api;

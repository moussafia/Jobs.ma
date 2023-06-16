import axios from "axios";
let csrfToken = null;
export default function fetchCsrfToken() {
  return new Promise((resolve, reject) => {
    if (csrfToken) {
      resolve(csrfToken);
    } else {
      axios
        .get("http://localhost:8000/api/csrfToken")
        .then((response) => {
          csrfToken = response.data.csrf_token;
          console.log(csrfToken);
          resolve(csrfToken);
        })
        .catch((error) => {
          console.log(error);
          reject(error);
        });
    }
  });
}

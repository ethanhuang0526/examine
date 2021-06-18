import axios from "axios";

axios.defaults.baseURL = "http://localhost:8000";

axios.defaults.headers.common["Content-Type"] =
  "application/x-www-form-urlencoded";
axios.defaults.headers.common.accept =
  process.env.ACCEPT || "application/json, text/plain, */*";

axios.interceptors.request.use(
  request => {
    return request;
  },
  error => {
    return Promise.reject(error);
  }
);

axios.interceptors.response.use(
  response => {
    return response;
  },
  error => {
    return Promise.reject(error);
  }
);

export default axios;

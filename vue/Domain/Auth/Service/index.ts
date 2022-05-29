
import axios from 'axios';

const env = import.meta.env.VITE_API

export const login = () => {
  axios.post(`${env}/auth/login`, form)
  .then(function (response) {
    console.log(response);
  })
}
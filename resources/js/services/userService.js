import axios from 'axios'

const baseURL = 'http://127.0.0.1:8000/'

export const userService = {
  getUserStatus() {    
    return axios.get(baseURL + 'api/user_status')
  }
}
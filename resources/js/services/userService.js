import axios from 'axios'

const baseURL = 'http://fanclubweb.herokuapp.com/'

export const userService = {
  getUserStatus() {    
    return axios.get(baseURL + 'api/user_status')
  }
}
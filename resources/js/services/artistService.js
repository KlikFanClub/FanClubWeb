import axios from 'axios'

const baseURL = 'http://fanclubweb.herokuapp.com/'

export const artistService = {
  getAllArtists() {
    return axios.get('http://fanclubweb.herokuapp.com/api/artists')
  },
  getArtist(id) {
    return axios.get('http://fanclubweb.herokuapp.com/api/artists/' + id)
  }
}
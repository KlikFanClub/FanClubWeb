import axios from 'axios'

const baseURL = 'http://fanclubweb.herokuapp.com'

export const artistService = {
  getAllArtists() {
    return axios.get(baseURL + '/api/artists')
  },
  getArtist(id) {
    return axios.get(baseURL + '/api/artists/' + id)
  }
}
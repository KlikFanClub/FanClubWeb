import axios from 'axios'

const baseURL = 'http://127.0.0.1:8000/'

export const artistService = {
  getAllArtists() {
    return axios.get(baseURL + 'api/artists')
  },
  getArtist(id) {
    return axios.get(baseURL + 'api/artists/' + id)
  }
}
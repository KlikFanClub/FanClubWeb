import axios from 'axios'

const baseURL = 'http://127.0.0.1:8000/'

export const artworkService = {
  getAllArtworks() {
    return axios.get(baseURL + 'api/workarts')
  },
  getArtwork(id) {
    return axios.get(baseURL + 'api/workarts/' + id)
  },
  getAllArtists() {
    return axios.get(baseURL + 'api/artists')
  },
  getArtist(id) {
    return axios.get(baseURL + 'api/artists/' + id)
  }
}
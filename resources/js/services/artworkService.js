import axios from 'axios'

const baseURL = 'http://fanclubweb.herokuapp.com/'

export const artworkService = {
  getAllArtworks() {
    return axios.get(baseURL + '/api/workarts')
  },
  getArtwork(id) {
    return axios.get(baseURL + '/api/workarts/' + id)
  }
}
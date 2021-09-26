import axios from 'axios'

const baseURL = 'http://fanclubweb.herokuapp.com/'

export const artworkService = {
  getAllArtworks() {
    return axios.get('http://fanclubweb.herokuapp.com/api/workarts')
  },
  getArtwork(id) {
    return axios.get('http://fanclubweb.herokuapp.com/api/workarts/' + id)
  }
}
import axios from 'axios'

const baseURL = 'http://127.0.0.1:8000/'

export const artworkService = {
  showAllArtworks() {
    return axios.get(baseURL + 'artworks')
  },
  showArtwork(id) {
    return axios.get(baseURL + 'artworks/' + id)
  }
}
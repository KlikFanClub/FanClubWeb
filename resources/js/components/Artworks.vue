<template>
  <div>
    <div class="artwork_card" v-for="artwork in artworks">
      <img class="artwork_img" :src="artwork.imageworkart" alt="" />
      <span class="artwork_title">{{ artwork.title }}</span>
      <span class="artwork_artistName">{{
        artistName(artwork.artist_id)
      }}</span>
      <span class="artwork_date">10/12/2016</span>
      <span class="artwork_price">{{ artwork.price }}</span>
    </div>
  </div>
</template>

<script>
import { artworkService } from "../services/artworkService";
import { artistService } from "../services/artistService";

export default {
  name: "Artworks",
  data() {
    return {
      artworks: [],
      artists: [],
      artistName: null
    };
  },
  methods: {
    async getAllArtworks() {
      const request = await artworkService.getAllArtworks();
      request.data.forEach((item) => {
        this.artworks.push(item);
      });
    },
    async getAllArtists() {
      const request = await artistService.getAllArtists();
      request.data.forEach((item) => {
        this.artists.push(item);
      });
    },
    artistName(id) {
      this.artists.filter((item) => {
        if (id === item.id) {
          this.artistName = item.name
        }
      });
    },
    /* async getArtist(id) {
      const request = await artistService.getArtist(id);
      return request.data;
    }, */
    /* artistName(id) {
      return id
    }, */
  },
  computed: {},
  created() {
    this.getAllArtworks();
    this.getAllArtists();
  },
};
</script>
<template>
  <div>
    <div class="artwork_card" v-for="artwork in filteredArtworks">
      <img class="artwork_img" :src="artwork.imageworkart" alt="" />
      <span class="artwork_title">{{ artwork.title }}</span>
      <span class="artwork_artistName">{{ artwork.artist.name }}</span>
      <span class="artwork_date">10/12/2016</span>
      <span @click="restoreArtworks" class="artwork_price">{{
        artwork.price
      }}</span>
    </div>
  </div>
</template>

<script>
import { artworkService } from "../services/artworkService";
import { eventBus } from "../app.js";

export default {
  name: "Artworks",
  data() {
    return {
      allArtworks: [],
      filteredArtworks: [],
    };
  },
  methods: {
    async getAllArtworks() {
      const request = await artworkService.getAllArtworks();
      request.data.forEach((item) => {
        this.allArtworks.push(item);
        this.filteredArtworks.push(item);
      });
    },
    restoreArtworks() {
      this.filteredArtworks.splice(0);
      this.allArtworks.forEach((item) => {
        this.filteredArtworks.push(item);
      });
    },
  },
  created() {
    this.getAllArtworks();
    eventBus.$on("filter", (artistName) => {
      this.restoreArtworks();
      let filteredArtworks = this.filteredArtworks.filter(
        (item) => item.artist.name == artistName
      );
      this.filteredArtworks = filteredArtworks;
    });
  },
};
</script>
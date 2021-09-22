<template>
  <div class="catalogue_artworks">
    <div class="artwork_card" v-for="artwork in filteredArtworks">
      <div class="artwork_imgWrapper">
        <div class="artwork_imgContainer">
          <img
            class="artwork_img"
            :src="'storage/' + artwork.imageworkart"
            alt=""
          />
        </div>
      </div>
      <span class="artwork_title">{{ artwork.title }}</span>
      <span class="artwork_artistName">{{ artwork.artist.name }}</span>
      <!-- <span class="artwork_date">10/12/2016</span> -->
      <span class="artwork_price">{{ artwork.price }}</span>
      <div v-if="isLoggedIn" class="action_buttons">
        <a :href="'/workarts/edit/' + artwork.id">
          <i class="far fa-edit"></i>
        </a>
        <a :href="'/workarts/delete/' + artwork.id">
          <i class="fas fa-trash-alt"></i>
        </a>
      </div>
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
      isLoggedIn: null,
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
    this.$root.$refs.Artworks = this;
    this.isLoggedIn = window.authCheck;
  },
};
</script>

<style lang="scss">
.catalogue {
  display: flex;
  flex-direction: column;
}
.catalogue_artworks {
  max-width: 75%;
  display: grid;
  grid-template-columns: 33.3% 33.3% 33.3%;

  @media (max-width: 1400px) {
    grid-template-columns: 50% 50%;
    max-width: 70%;
  }

  @media (max-width: 1023px) {
    grid-template-columns: 50% 50%;
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  @media (max-width: 768px) {
    grid-template-columns: 50% 50%;
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  @media (max-width: 450px) {
    grid-template-columns: 100%;
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  margin: 30px;
  margin-left: 300px;
}

.artwork_card {
  position: relative;
  display: flex;
  flex-direction: column;
  margin: 20px;
  -webkit-box-shadow: 7px 7px 7px 0px rgba(0, 0, 0, 0.25);
  box-shadow: 7px 7px 7px 0px rgba(0, 0, 0, 0.25);
}

.action_buttons {
  position: absolute;
  bottom: 5px;
  right: 5px;
  font-size: 20px;
}

.artwork_imgContainer {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  overflow: hidden;
}

.artwork_img {
  width: 100%;
  object-fit: cover;
}

.artwork_title {
  font-size: 18px;
  font-weight: 700;
}

.artwork_artistName {
  font-size: 16px;
}

.artwork_date {
  font-style: italic;
}

.artwork_price {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 6px;
}
</style>

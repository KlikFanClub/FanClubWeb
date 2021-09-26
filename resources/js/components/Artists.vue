<template>
  <div class="catalogue_artists">
    <div class="artist_card" v-for="artist in artists">
      <div class="artist_imgWrapper">
        <div class="artist_imgContainer">
          <img
            class="artist_img"
            :src="'storage/' + artist.profile_picture"
            :alt="'Foto de perfil de ' + artist.name"
          />
        </div>
      </div>
      <div class="infoContainer">
        <div class="artist_info">
          <span class="artist_name">{{ artist.name }}</span>
          <p class="bio">{{ artist.bio }}</p>
        </div>
        <div class="social_media">
          <a class="socialmedia_link" :href="artist.instagram" target="_blank"
            ><span class="iconify" data-icon="akar-icons:instagram-fill"></span
          ></a>
          <a class="socialmedia_link" :href="artist.facebook" target="_blank"
            ><span class="iconify" data-icon="brandico:facebook-rect"></span
          ></a>
          <a class="socialmedia_link" :href="artist.twitter" target="_blank"
            ><span class="iconify" data-icon="el:twitter"></span
          ></a>
        </div>
      </div>
      <div v-if="isLoggedIn" class="action_buttons">
        <a :href="'/artists/edit/' + artist.id">
          <i class="far fa-edit"></i>
        </a>
        <a :href="'/artists/delete/' + artist.id">
          <i class="fas fa-trash-alt"></i>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import { artistService } from "../services/artistService";

export default {
  name: "Artists",
  data() {
    return {
      artists: [],
      isLoggedIn: null,
    };
  },
  methods: {
    async getAllArtists() {
      try {
        const request = await artistService.getAllArtists();
        request.data.forEach((item) => {
          this.artists.push(item);
        });
      } catch (error) {
        console.log(error);
      }
    },
  },
  created() {
    this.getAllArtists();
    this.isLoggedIn = window.authCheck;
  },
};
</script>

<style lang="scss">
.catalogue {
  display: flex;
  flex-direction: column;
}
.catalogue_artists {
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
    grid-template-columns: 100%;
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

  margin: 30px auto;
}

.artist_card {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
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

.artist_imgContainer {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  overflow: hidden;
}

.artist_img {
  width: 100%;
  object-fit: cover;
}

.artist_name {
  font-size: 18px;
  font-weight: 700;
}

.artist_bio {
  font-size: 16px;
}

.infoContainer {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

.social_media {
  font-size: 32px;
}

.socialmedia_link {
  color: black;

  &:hover {
    color: rgb(19, 147, 233);
  }
}
</style>
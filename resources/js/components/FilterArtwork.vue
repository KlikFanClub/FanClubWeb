<template>
  <div>
    <aside v-if="isOpen" class="filter">
      <div
        v-for="(menuItem, index) in menuItems"
        v-bind:key="index"
        class="filter_category"
      >
        {{ menuItem.name }}
        <div class="filter_subMenu">
          <span
            v-for="(item, index) in menuItem.subMenu"
            v-bind:key="index"
            class="subMenuItem"
          >
            {{ item }}
          </span>
        </div>
      </div>
    </aside>
    <a
      role="button"
      v-on:click="toggleMenu"
      v-if="mobileView"
      tabIndex="0"
      class="mobile_filterBtn"
    >
      <span class="iconify" data-icon="cil:filter"></span>
    </a>
  </div>
</template>
<script>
export default {
  name: "FilterArtwork",
  data() {
    return {
      mobileView: false,
      isOpen: true,
      menuItems: {
        all: {
          name: "todos los productos",
          subMenu: [],
        },
        edition: {
          name: "edición",
          subMenu: ["Edición Limitada", "Edición Abierta", "Pieza única"],
        },
        size: {
          name: "tamaño",
          subMenu: ["Pêqueño", "Mediano", "Grande", "Muy Grande"],
        },
        price: {
          name: "precio",
          subMenu: ["<25€", "25-50€", "50-100€", "100-150€", "+150€"],
        },
        technique: {
          name: "técnica",
          subMenu: ["Dibujo", "Impresión Digital", "Pintura", "Grabado"],
        },
        theme: {
          name: "temas",
          subMenu: [
            "Animales",
            "Personas y retratos",
            "Blanco y negro",
            "Flores y plantas",
          ],
        },
        other: {
          name: "otros",
          subMenu: [],
        },
        artists: {
          name: "artistas",
          subMenu: ["Alba Macfarlane", "Emily Eldridge", "Irene López León"],
        },
      },
    };
  },
  methods: {
    handleView() {
      this.mobileView = window.innerWidth <= 768;
    },
    toggleMenu() {
      this.isOpen = !this.isOpen;
    },
  },
  created() {
    this.handleView();
    if (this.mobileView) {
      this.isOpen = false;
    }
  },
};
</script>
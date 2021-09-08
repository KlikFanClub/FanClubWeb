<template>
  <div>
    <aside v-if="isOpen" class="filter">
      <template v-for="(menuItem, index) in menuItems">
        <div :class="subMenuOpen(menuItem)" @click="toggleSubMenu(menuItem)">
          {{ menuItem.name }}
        </div>
        <div :class="subMenuExpanded(menuItem)">
          <span
            v-for="(item, index) in menuItem.subMenu"
            v-bind:key="index"
            class="subMenuItem"
          >
            {{ item }}
          </span>
        </div>
      </template>
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
      menuItems: [
        {
          id: 1,
          name: "todos los productos",
          subMenu: [],
          isOpen: false,
        },
        {
          id: 2,
          name: "edición",
          subMenu: ["Edición Limitada", "Edición Abierta", "Pieza única"],
          isOpen: false,
        },
        {
          id: 3,
          name: "tamaño",
          subMenu: ["Pequeño", "Mediano", "Grande", "Muy Grande"],
          isOpen: false,
        },
        {
          id: 4,
          name: "precio",
          subMenu: ["<25€", "25-50€", "50-100€", "100-150€", "+150€"],
          isOpen: false,
        },
        {
          id: 5,
          name: "técnica",
          subMenu: ["Dibujo", "Impresión Digital", "Pintura", "Grabado"],
          isOpen: false,
        },
        {
          id: 6,
          name: "temas",
          subMenu: [
            "Animales",
            "Personas y retratos",
            "Blanco y negro",
            "Flores y plantas",
          ],
          isOpen: false,
        },
        {
          id: 7,
          name: "otros",
          subMenu: [],
          isOpen: false,
        },
        {
          id: 8,
          name: "artistas",
          subMenu: ["Alba Macfarlane", "Emily Eldridge", "Irene López León"],
          isOpen: false,
        },
      ],
    };
  },
  methods: {
    handleView() {
      this.mobileView = window.innerWidth <= 768;
    },
    toggleMenu() {
      this.isOpen = !this.isOpen;
    },
    toggleSubMenu(menuItem) {
      this.menuItems.forEach((item) => {
        if (item === menuItem) {
          menuItem.isOpen = !menuItem.isOpen;
        } else {
          item.isOpen = false;
        }
      });
    },
    subMenuExpanded(menuItem) {
      return menuItem.isOpen ? "filter_subMenu expanded" : "filter_subMenu";
    },
    subMenuOpen(menuItem) {
      return menuItem.isOpen ? "filter_category open" : "filter_category";
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

<style lang="scss">
.filter {
  overflow-y: scroll;
  max-height: 600px;
  position: fixed;
  left: 0;
  z-index: 10;
  display: flex;
  flex-direction: column;
  padding: 10px 20px;
  margin: 50px 30px 30px 30px;
  background-color: rgb(226, 226, 226);
  -webkit-box-shadow: 7px 7px 7px 0px rgba(0, 0, 0, 0.25);
  box-shadow: 7px 7px 7px 0px rgba(0, 0, 0, 0.25);
  @media (max-width: 768px) {
    border-radius: 6px;
    position: fixed;
    left: unset;
    right: 20px;
    bottom: 85px;
    width: 260px;
  }
}
.mobile_filterBtn {
  @media (max-width: 768px) {
    text-decoration: none;
    color: initial;
    border: solid 1px rgb(175, 175, 175);
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 50px;
    right: 50px;
    z-index: 10;
    width: 55px;
    height: 55px;
    border-radius: 200px;
    background-color: white;
    -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.5);
    box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.5);
    font-size: 28px;
    &:hover,
    &:focus,
    &:focus-within,
    &:focus-visible,
    &:active {
      color: initial;
    }
  }
}

.filter_category {
  white-space: nowrap;
  font-size: 18px;
  padding: 6px 0;
  text-transform: uppercase;
  margin: auto -20px;
  padding: 10px 20px;
}

.open {
  background-color: rgb(26, 26, 26);
  color: white;
}

.filter_subMenu {
  display: flex;
  flex-direction: column;
  height: 0;
  transition: height 1s 0.2s;
  overflow-y: hidden;
}

.expanded {
  display: flex;
  flex-direction: column;
  max-height: 350px;
  height: auto;
  overflow-y: unset;
}

.subMenuItem {
  background-color: white;
  margin: auto -20px;
  font-size: 18px;
  padding: 4px 20px;
}
</style>

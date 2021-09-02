const navBarLink = document.getElementsByClassName('nav-link'),
    selected = document.getElementsByClassName('selected');

navBarLink.addEventListener('click', () => {
    selected.classList.add ('selected');
});
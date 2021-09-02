const navBarLink = document.getElementsByClassName(''),
    selected = document.getElementsByClassName('selected');

navBarLink.addEventListener('click', () => {
    selected.classList.add ('selected');
});
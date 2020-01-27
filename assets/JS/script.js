//remove a cookies' banner
const cookiesSubmit = document.getElementById('submit');
const cookiesRow = document.getElementById('cookiesRow');
cookiesSubmit.addEventListener('click', e => {
    cookiesRow.remove();
});
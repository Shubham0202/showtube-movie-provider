const showSearch = document.querySelector('.srch-btn');
const takeInput = document.querySelector('.take-input');

showSearch.addEventListener('click', () => {
    takeInput.classList.toggle('active-take-input');
    search.focus();

    if (!takeInput.classList.contains("active-take-input"))
        search.blur();
});

const champions = ['Ahri', 'Akali', 'Alistar', 'Amumu', 'Anivia', 'Annie', 'Aphelios', 'Ashe', 'Aurelion Sol', 'Azir'];

const searchInput = document.getElementById('search_input');

searchInput.addEventListener('input', function() {
    const inputValue = this.value.toLowerCase();
    const suggestions = document.getElementById('suggestions');
    suggestions.innerHTML = '';

    const filteredChampions = champions.filter(champion => champion.toLowerCase().includes(inputValue));

    filteredChampions.forEach(champion => {
        const suggestion = document.createElement('div');
        suggestion.textContent = champion;
        suggestion.classList.add('suggestion');
        suggestion.addEventListener('click', function() {
            searchInput.value = champion;
            suggestions.innerHTML = '';
        });
        suggestions.appendChild(suggestion);
    });
});

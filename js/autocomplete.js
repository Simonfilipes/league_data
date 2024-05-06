let champions_list = [];


// Obtenha a largura computada do primeiro elemento
var larguraElemento1 = document.querySelector('.search_bar').offsetWidth;

// Atribua a largura ao segundo elemento
document.querySelector('.list').style.width = larguraElemento1 + 'px';


async function getChamps(){
    let champions;
    champions = await axios.get("request/getData.php?function_name=champs");
    champions = champions.data;
    for(let champ of champions){
        champions_list.push(champ.id)
    }
}

let input = document.querySelector('#search_input');

input.addEventListener('input', (e) => {
    const listDiv = document.querySelector('.list');
    if (input.value === "") {
        listDiv.style.visibility = 'hidden';
    } else {
        listDiv.style.visibility = 'visible';
        removeElements();
        const inputValue = input.value.toLowerCase();
        for (let champion of champions_list) {
            const championLowerCase = champion.toLowerCase();
            if (championLowerCase.startsWith(inputValue) && inputValue !== "") {
                let listItem = document.createElement("li");
                listItem.classList.add("list-items");
                listItem.style.cursor = "pointer";
                listItem.setAttribute("onclick", "displayNames('" + champion + "')");

                // Criar a imagem
                let img = document.createElement("img");
                img.src = "https://ddragon.leagueoflegends.com/cdn/14.8.1/img/champion/" + champion + ".png";
                img.alt = champion;
                img.style.width = "50px"; // Defina o tamanho desejado para a imagem

                // Adicionar a imagem ao listItem
                listItem.appendChild(img);

                // Adicionar o nome do campeão
                let name = document.createTextNode(champion);
                listItem.appendChild(name);

                // Adicionar o listItem à lista
                document.querySelector(".list").appendChild(listItem);
            }
        }
    }
});



function displayNames(value){
    window.location.href = `champion.php?champ=${value}`;
}

function removeElements(){
    let items = document.querySelectorAll('.list-items');
    items.forEach((item) => {
        item.remove();
    })
}

getChamps();
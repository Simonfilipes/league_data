let champName, champSpells, champPassive;

async function champData(){
    champName = document.querySelector('#p_1').textContent;
    champSpells = await axios.get(`request/getData.php?function_name=spells&champ_name=${champName}`);
    champPassive = await axios.get(`request/getData.php?function_name=passive&champ_name=${champName}`);
    redirect()
}

async function redirect(){
    const selectValue = document.querySelector('#skills').value;
    const divContent = document.querySelector('.champSpells');
    switch(selectValue){
        case 'p':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/passive/${champPassive.data.image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML +=  `<p id='skill_content'>${champPassive.data.description}</p>`
            break;

        case 'q':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/spell/${champSpells.data[0].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML +=  `<p id='skill_content'>${champSpells.data[0].description}</p>`
            break;
        
        case 'w':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/spell/${champSpells.data[1].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML +=  `<p id='skill_content'>${champSpells.data[1].description}</p>`
            break;

        case 'e':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/spell/${champSpells.data[2].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML +=  `<p id='skill_content'>${champSpells.data[2].description}</p>`
            break;

        case 'r':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/14.8.1/img/spell/${champSpells.data[3].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML +=  `<p id='skill_content'>${champSpells.data[3].description}</p>`
            break;

        default:
            console.log('Não caiu em nenhum')
            break
    }
}

champData()
let champName, champSpells, champPassive;

async function champData(){
    champName = document.querySelector('#p_1').textContent;
    champSpells = await axios.get(`request/getData.php?function_name=spells&champ_name=${champName}`);
    champPassive = await axios.get(`request/getData.php?function_name=passive&champ_name=${champName}`);

    getBuildDefault();
    redirect();
}

async function getBuildDefault(){
    champ_build = await axios.get(`request/getData.php?function_name=build&champ_name=${champName}`);
    champ_build = champ_build.data.pageProps;
    setRates(champ_build)
}

async function updateBuildByFilter(){
    position = document.querySelector("#position").value;
    region = document.querySelector("#region").value;
    tier = document.querySelector("#tier").value;

    champ_build = await axios.get(`request/getData.php?function_name=filterBuild&champ_name=${champName}&region=${region}&tier=${tier}&position=${position}`);
    champ_build = champ_build.data.pageProps;

    setRates(champ_build);
}

function setRates(champ_build){
    console.log(champ_build.data)
    region = document.querySelector('#region');
    tier = document.querySelector('#tier');
    position = document.querySelector('#position');

    pickrate = document.querySelector('#pickrate');
    banrate = document.querySelector('#banrate');
    winrate = document.querySelector('#winrate');

    region.value = champ_build.region;
    tier.value = champ_build.tier;
    position.value = champ_build.position;

    pickrate.textContent = ((champ_build.data.trends.pick[0].rate )* 100).toFixed(2) + "%";
    banrate.textContent = ((champ_build.data.trends.ban[0].rate )* 100).toFixed(2) + "%";
    winrate.textContent = ((champ_build.data.trends.win[0].rate )* 100).toFixed(2) + "%";
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
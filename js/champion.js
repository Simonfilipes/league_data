async function champData() {
    champName = document.querySelector('#p_1').textContent;
    champSpells = await axios.get(`request/getData.php?function_name=spells&champ_name=${champName}`);
    champPassive = await axios.get(`request/getData.php?function_name=passive&champ_name=${champName}`);
    versionData = await axios.get(`https://ddragon.leagueoflegends.com/api/versions.json`);
    version = versionData.data[0];

    getBuildDefault();
    redirect();
}

async function getBuildDefault() {
    champ_build = await axios.get(`request/getData.php?function_name=build&champ_name=${champName}`);
    champ_build = champ_build.data.pageProps;
    setRates(champ_build);
}

async function updateBuildByFilter() {
    position = document.querySelector("#position").value;
    region = document.querySelector("#region").value;
    tier = document.querySelector("#tier").value;

    champ_build = await axios.get(`request/getData.php?function_name=filterBuild&champ_name=${champName}&region=${region}&tier=${tier}&position=${position}`);
    champ_build = champ_build.data.pageProps;

    setRates(champ_build);
}

async function setRates(champ_build) {
    region = document.querySelector('#region');
    tier = document.querySelector('#tier');
    position = document.querySelector('#position');

    pickrate = document.querySelector('#pickrate');
    banrate = document.querySelector('#banrate');
    winrate = document.querySelector('#winrate');

    region.value = champ_build.region;
    tier.value = champ_build.tier;
    position.value = champ_build.position;

    pickrate.textContent = ((champ_build.data.trends.pick[0].rate) * 100).toFixed(2) + "%";
    banrate.textContent = ((champ_build.data.trends.ban[0].rate) * 100).toFixed(2) + "%";
    winrate.textContent = ((champ_build.data.trends.win[0].rate) * 100).toFixed(2) + "%";

    primary = document.querySelector('.primary_rune');
    secondary = document.querySelector('.secondary_rune');
    statsmods = document.querySelector('.statsmod');
    setRunes(champ_build, primary, secondary, statsmods);

    builds = document.querySelector('.builds');
    items(champ_build, builds)

    divSkills = document.querySelector('.skills');
    skillOrder(champ_build, divSkills);
}

async function items(champ_build, builds) {
    let result = '';
    let coreItems = champ_build.data.core_items;
    let boots = champ_build.data.boots;
    let starterItems = champ_build.data.starter_items;
    let list = [starterItems, boots, coreItems];

    for (let item of list) {
        for (let id of item[0].ids) {
            result += `<img id="item" src="https://ddragon.leagueoflegends.com/cdn/${version}/img/item/${id}.png" alt="${item[0]}">`;
        }
        result += '<br>'
    }

    builds.innerHTML = result;
}

async function skillOrder(champ_build, divSkills) {
    let result = '';
    let skills = champ_build.data.skills[0];

    for (let skill of skills.order) {
        result += `<span id="seta"> -> </span>`
        let img;

        switch (skill) {
            case 'Q':
                img = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[0].image.full}' alt='${champName} passive'>`
                break;

            case 'W':
                img = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[1].image.full}' alt='${champName} passive'>`
                break;

            case 'E':
                img = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[2].image.full}' alt='${champName} passive'>`
                break;

            case 'R':
                img = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[3].image.full}' alt='${champName} passive'>`
                break;
        }

        result += `
            <div class='skill'>
                ${img}
                <span id='skills'>${skill}</span>
            </div>
        `;
    }

    divSkills.innerHTML = result;
}

async function setRunes(champ_build, primary, secondary, statmod) {
    champRunes = champ_build.data.rune_pages[0].builds[0];

    primary.innerHTML = await runePages(champRunes.primary_page_id, champ_build.data.meta.runePages)
    primary.innerHTML += await runePages(champRunes.primary_rune_ids, champ_build.data.meta.runes)

    secondary.innerHTML = await runePages(champRunes.secondary_page_id, champ_build.data.meta.runePages)
    secondary.innerHTML += await runePages(champRunes.secondary_rune_ids, champ_build.data.meta.runes)

    statmod.innerHTML = await runePages(champRunes.stat_mod_ids, champ_build.data.meta.statMods)
}


async function runePages(runes, links) {
    let result = '';

    if (!Array.isArray(runes)) {
        runes = [runes];
    }

    for (let rune of runes) {
        for (let link of links) {
            if (link.id == rune) {
                result += `<img id="rune" src="${link.image_url}" alt="${link.name}">`;
                break;
            }
        }
    }
    return result;
}


async function redirect() {
    const selectValue = document.getElementById('skillsDesciption').value;
    console.log(selectValue);
    const divContent = document.querySelector('.champSpells');

    switch (selectValue) {
        case 'p':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/passive/${champPassive.data.image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML += `<p id='skill_content'>${champPassive.data.description}</p>`
            break;

        case 'q':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[0].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML += `<p id='skill_content'>${champSpells.data[0].description}</p>`
            break;

        case 'w':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[1].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML += `<p id='skill_content'>${champSpells.data[1].description}</p>`
            break;

        case 'e':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[2].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML += `<p id='skill_content'>${champSpells.data[2].description}</p>`
            break;

        case 'r':
            divContent.innerHTML = `<img src='https://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champSpells.data[3].image.full}' alt='${champName} passive' id='skill_img'>`
            divContent.innerHTML += `<p id='skill_content'>${champSpells.data[3].description}</p>`
            break;
    }
}

champData();

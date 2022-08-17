import data from './master.json' assert {type: 'json'};

window.onload = function () {
    let cat='Cat1',type='LabGrown',color='WhiteGold';
    const colorBtn = document.getElementsByClassName('choose-color');
    const typeBtn = document.getElementsByClassName('diamond-type');

    for (let i = 0; i < colorBtn.length; i++) {
        colorBtn[i].addEventListener('click',function(){
            const data = this.getAttribute('color').split("-");
            console.log( this.getAttribute('color').split("-"));
            cat = data[0];
            color = data[1];

            displayItems(cat,type,color)
        })
    }

    for (let i = 0; i < typeBtn.length; i++) {
        typeBtn[i].addEventListener('click',function(){
            const data = this.getAttribute('type').split("-");
            console.log( this.getAttribute('type').split("-"));
            cat = data[0];
            type = data[1];

            displayItems(cat,type,color)
        })
    }
    
    const displayItems = (cat,type,color)=>{
        const itemsHolderId = `${cat}-displayItems`
        const imgHolderId = `${cat}-displayMainImg`
        let result = data[cat][type][color].items;
        let value = `${result.map(r =>  r.testing )}`
        document.getElementById(itemsHolderId).innerHTML=value;
        document.getElementById(imgHolderId).innerHTML=data[cat][type][color].title;
    }

    displayItems(cat,type,color)
    displayItems('Cat2','EarthNaturalSI','YellowGold')

}
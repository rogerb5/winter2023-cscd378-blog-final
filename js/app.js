"use strict";
const btnTag = Array.from(document.querySelectorAll("button.btn"));
const itemTag = Array.from(document.querySelectorAll("div.item"));

/*  
    Applies certain filter setting according to the 
    button index. 
*/
function applyFilter() {
    btnTag.forEach((btn, btnIndex) => {
        btn.addEventListener("click", () => {
            if (btnIndex === 0) {
                resetFilter(itemTag)
            } else {
                itemTag.forEach(item => {
                    item.style.display = 'block';
                })
                filterValues(itemTag, btn)
            }
        })
    })
}

/*
    Takes an item array as a parameter, and
    set's the div item's display to block
*/
function resetFilter(itemArr) {
    itemArr.forEach(item => {
        item.style.display = 'block';
    })
}

/*
    Takes an item array and button data as parameters
    Builds a new array of the items attributes and filters
    the button clicked attribute.
*/
function filterValues(itemArr, btnData) {
    let attributeArray = [];
    let btnAttribute = btnData.getAttribute('data-filter');

    for (let index = 0; index <= itemArr.length - 1; index++) {
        attributeArray.push(itemArr[index].getAttribute('data-filter'));
    }

    // builds filtered array
    const result = attributeArray.filter((value => {
        return value.trim().includes(btnAttribute);
    }))

    itemTag.forEach(item => {
        let itemAttribute = item.getAttribute('data-filter');
        if (itemAttribute.includes(result) && result.length >= 1) {
            item.style.border = 'block';
            console.log(item);
        } else {
            item.style.display = 'none'
        }
    })
    console.log("Result Array ", result);
}

applyFilter();
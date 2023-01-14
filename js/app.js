"use strict";

const filterBtns = Array.from(document.querySelectorAll("button.btn"));
const itemTag = Array.from(document.querySelectorAll("div.item"));
console.log(itemTag)

/*
    Traverses each button
    and resets the border colder according to the 
    button attribute and item attribute

    testing purposes
*/
filterBtns.forEach((btn, idx) => {
    btn.addEventListener("click", () => {
        if (idx === 0) {
            itemTag.forEach(item => {
                item.style.border = 'solid 2px red';
            })
        } else {

            itemTag.forEach(item => {
                item.style.border = '2px solid yellow';
            })

            let btnAttribute = btn.getAttribute('data-filter');
            // console.log(btnAttribute)
            itemTag.forEach(item => {
                let itemAttribute = item.getAttribute('data-filter');
                // console.log(typeof itemAttribute);
                if (btnAttribute.includes(itemAttribute)) {
                    item.style.border = '2px solid blue';
                }
            })
        }
    })
})
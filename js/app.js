"use strict";

const filterBtns = document.querySelectorAll("button.btn");

// traverses each button 
// a method will be applied according to index
filterBtns.forEach((btn, idx) => {
    btn.addEventListener("click", () => {
        if (idx === 0) {
            alert("You have reset the filter");
        } else {
            alert("You clicked button " + idx);
        }
    })
})

// takes a filter and tag as parameters
// and get's each buttons attribute to show
// the respective blog 
function filterTag() {

}

// reset filter
function resetFilter() {

}
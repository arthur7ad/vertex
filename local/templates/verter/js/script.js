
let tabsBtn = document.querySelectorAll(".tabs__nav-btn");
let tabsItems = document.querySelectorAll(".tabs__item");

console.log(tabsBtn);
console.log(tabsItems);

tabsBtn.forEach(onTabClick);

function onTabClick(item) {
    item.addEventListener("click", function () {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);

        if (!currentBtn.classList.contains('active')) {
            tabsBtn.forEach(function (item) {
                item.classList.remove('active');
            });

            tabsItems.forEach(function (item) {
                item.classList.remove('active');
            });

            currentBtn.classList.add('active');
            currentTab.classList.add('active');
        }
    });
}

document.querySelector('.tabs__nav-btn').click();


let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
let logo = document.getElementById('logo');
menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
    logo.classList.toggle('hidden')
})



function right(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('verter-right');
        }
    });
}

let options = {
    threshold: [0.5]
};
let observer1 = new IntersectionObserver(right, options);
let elements1 = document.querySelectorAll('.verter-r');

for (let elm of elements1) {
    observer1.observe(elm);
}


function bottom(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('verter-bottom');
        }
    });
}


let observer2 = new IntersectionObserver(bottom, options);
let elements2 = document.querySelectorAll('.verter-b');

for (let elm of elements2) {
    observer2.observe(elm);
}


function left(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('verter-left');
        }
    });
}

let observer3 = new IntersectionObserver(left, options);
let elements3 = document.querySelectorAll('.verter-left');

for (let elm of elements3) {
    observer3.observe(elm);
}



function show(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('verter-show');
        }
    });
}

let observer5 = new IntersectionObserver(scale, options);
let elements5 = document.querySelectorAll('.verter-show');

for (let elm of elements5) {
    observer4.observe(elm);

}



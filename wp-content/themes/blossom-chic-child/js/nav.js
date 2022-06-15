// Gives a class to the first word in the navigation bar
let navItems = document.querySelectorAll("#primary-menu > .menu-item > a");

function addClassFirstWord(item, firstCls, restCls) {
    let itemStr = item.innerHTML;
    let itemSplit = itemStr.split(" ");

    item.innerHTML = "<span class=" + firstCls + ">"
    .concat(itemSplit[0], "</span>") + "<br>" + "<span class=" + restCls + ">" + itemStr
    .substr(itemStr.indexOf(" ") + 1) + "</span>";
}

navItems.forEach(item => {
    addClassFirstWord(item, 'menu-first', 'menu-rest');
});

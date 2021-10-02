var settingmenu = document.querySelector(".settings");

function settingMenuToggle(){
    settingmenu.classList.toggle("settings-height");
}

var leftnavmob = document.querySelector(".left-sidebar");
function leftNavToggle(){
    leftnavmob.classList.toggle("left-sidebar-mob");
}

var darkBtn = document.getElementById("dark-btn");

darkBtn.onclick = function(){
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");

    if(localStorage.getItem("theme") == "light")
        localStorage.setItem("theme", "dark");
    else
        localStorage.setItem("theme", "light");
}


if(localStorage.getItem("theme") == "light"){
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
}
else if(localStorage.getItem("theme") == "dark"){
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
}
else{
    localStorage.setItem("theme", "light");
}

function changeDisplay(source){
    document.getElementById("iframe-source").value = source;
}

function source_locator(){
    let source = document.getElementById("iframe-source").value;
    
    if(source == "menu.html"){
        document.getElementById("menu-selected").style.display = "flex";
        document.getElementById("menu-unselected").style.display = "none";
        document.getElementById("order-list-selected").style.display = "none";
        document.getElementById("order-list-unselected").style.display = "flex";
        document.getElementById("history-selected").style.display = "none";
        document.getElementById("history-unselected").style.display = "flex";
    }
    else if(source == "register.html"){
        document.getElementById("menu-selected").style.display = "none";
        document.getElementById("menu-unselected").style.display = "flex";
        document.getElementById("order-list-selected").style.display = "flex";
        document.getElementById("order-list-unselected").style.display = "none";
        document.getElementById("history-selected").style.display = "none";
        document.getElementById("history-unselected").style.display = "flex";
    }
    else if(source == "order-history.html"){
        document.getElementById("menu-selected").style.display = "none";
        document.getElementById("menu-unselected").style.display = "flex";
        document.getElementById("order-list-selected").style.display = "none";
        document.getElementById("order-list-unselected").style.display = "flex";
        document.getElementById("history-selected").style.display = "flex";
        document.getElementById("history-unselected").style.display = "none";
    }
}


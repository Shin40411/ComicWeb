const currentLocation = location.href;
const menuItem = document.querySelectorAll('.act .arrange');
const menuLength = menuItem.length;

for (let i = 0; i < menuLength; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "arrange active"
    }
}


const currentStatus = location.href;
const statusItem = document.querySelectorAll('.sta .current');
const statusLength = statusItem.length;

for (let i = 0; i < statusLength; i++){
    if(statusItem[i].href === currentStatus){
        statusItem[i].className = "current active"
    }
}
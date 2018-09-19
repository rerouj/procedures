bdy = document.body;
welcome = document.createElement('p');
welcome.innerText = "VERSION JAVASCRIPT" ;

welcome.setAttribute('class','welcome');
bdy.appendChild(welcome);
but_enter = document.createElement('input');
but_enter.setAttribute('type','button');
but_enter.setAttribute('value','enter');
but_enter.onclick = function(){
    localStorage.setItem("procedure", menu.value);
    window.location='feu.html'
    console.log(menu.value);
}

menu = document.createElement('SELECT');
opt1 = document.createElement('option');
opt1.innerText = 'Administration'
opt2 = document.createElement('option');
opt2.innerText = 'Ecoles'
opt3 = document.createElement('option');
opt3.innerText = 'Hôpitaux-EMS'
opt4 = document.createElement('option');
opt4.innerText = 'Camping'
opt5 = document.createElement('option');
opt5.innerText = 'Hôtel'

menu.appendChild(opt1);
menu.appendChild(opt2);
menu.appendChild(opt3);
menu.appendChild(opt4);
menu.appendChild(opt5);


bdy.appendChild(document.createTextNode(' '));
bdy.appendChild(menu);
bdy.appendChild(but_enter);
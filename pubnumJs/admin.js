choix = localStorage.getItem("procedure");

bdy = document.body;
screen_box = document.createElement('div');
screen_box.setAttribute('class','screen_box');

screen = document.createElement('p');
screen.setAttribute('class','screen');
text_admin = "En cas d'incendie, appuyez sur le bouton d'urgence.";
screen.innerText = text_admin.toUpperCase();

bouton_urgence = document.createElement('img')
bouton_urgence.setAttribute('src','picto_button.png')
bouton_urgence.setAttribute('class','urgence');

box_bout = document.createElement('div');
box_bout.setAttribute('class','box_bout');

bout_next = document.createElement('p');
bout_next.setAttribute('class','next');

bout_arrow = document.createElement('img');
bout_arrow.setAttribute('src','picto_arrow.png');
bout_arrow.setAttribute('class','arrow')

picto_call = document.createElement('img');
picto_call.setAttribute('src','picto_appel.png')
picto_call.setAttribute('class','call')

picto_fire = document.createElement('img');
picto_fire.setAttribute('src','picto_fire.png')
picto_fire.setAttribute('class','fire')

picto_urg = document.createElement('img');
picto_urg.setAttribute('src','picto_urgence_feu.png')
picto_urg.setAttribute('class','urg')

screen_box.appendChild(picto_urg);
screen_box.appendChild(screen);
bdy.appendChild(screen_box);
bdy.appendChild(bouton_urgence);

function send_mail(){
}


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        bouton_urgence.onclick = function(){
            this.parentNode.removeChild(this);
            xmlRequest(xhttp);
        }
    }
};

xhttp.open("GET", "procedures6.xml", true);
xhttp.send();

function xmlRequest(xml) {
    temp = Number;
    xmlDoc = xml.responseXML;
    att = xmlDoc.getElementsByTagName('site');
    console.log(att[0].childNodes[1].getAttribute('type'));

    if(choix == 'Administration'){
        temp = 2;
    }
    else if(choix == 'Ecoles'){
        temp = 3;
    }
    else if(choix == 'Hôpitaux-EMS'){
        temp = 4;
    }
    else if(choix == 'Camping'){
        temp = 5;
    }
    else if(choix == 'Hôtel'){
        temp = 6;
    }

    admin = att[temp].childNodes[1].getElementsByTagName('etape');
    screen.innerText = admin[0].getAttribute('label');
    picto_urg.setAttribute('src','picto_urgence_feu(50).png')
    bout_next.innerText = 'prochaine étape'
    screen_box.className = 'screen_box2';
    screen.className = 'screen2';

    admin[0].getAttribute('mode') == 'appel'?(screen_box.appendChild(picto_call)):screen_box.appendChild(picto_fire);

    val = 0;
    box_bout.onclick = function(){
        val == admin.length-1 ? screen.innerText = admin[admin.length-1].getAttribute('label'):(screen.innerText = admin[val+1].getAttribute('label'), val++);
        admin[val].getAttribute('mode') == 'appel'?screen_box.appendChild(picto_call):(screen_box.childNodes[2].className == 'call'?(picto_call.parentNode.removeChild(picto_call), screen_box.appendChild(picto_fire)):(screen_box.appendChild(picto_fire)));
    }

    box_bout.appendChild(bout_arrow);
    box_bout.appendChild(bout_next);
    bdy.appendChild(box_bout);
}
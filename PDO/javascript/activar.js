function activarUno(){
    if(document.getElementById('uno').classList != "elemento active"){
        document.getElementById('uno').classList.toggle('active');
        document.getElementById('dos').classList.remove('active');
        document.getElementById('tres').classList.remove('active');
        document.getElementById('cuatro').classList.remove('active');
    }

}

function activarDos(){
    if(document.getElementById('dos').classList != "elemento active"){
        document.getElementById('uno').classList.remove('active');
        document.getElementById('dos').classList.add('active');
        document.getElementById('tres').classList.remove('active');
        document.getElementById('cuatro').classList.remove('active');
        
    }

}

function activarTres(){
    if(document.getElementById('tres').classList != "elemento active"){
        document.getElementById('uno').classList.remove('active');
        document.getElementById('dos').classList.remove('active');
        document.getElementById('tres').classList.add('active');
        document.getElementById('cuatro').classList.remove('active');
    }

}

function activarCuatro(){
    if(document.getElementById('cuatro').classList != "elemento active"){
        document.getElementById('uno').classList.remove('active');
        document.getElementById('dos').classList.remove('active');
        document.getElementById('tres').classList.remove('active');
        document.getElementById('cuatro').classList.add('active');
    }

}
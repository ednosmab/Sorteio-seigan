function cacaNiquel(ganhador, trofeu, button){
    chamaCacaNiquel()
    document.getElementById("gif").addEventListener("click", function(){
        setTimeout(escondeGif, 7500, ganhador, trofeu, button)
    }) 
     
}

function displayFlex(){
    return "flex"
}
function displayNone(){
    return "none"
}

function chamaCacaNiquel(){
    document.getElementById("gif-container").style.display = displayFlex()
    let gif = document.getElementById("gif")
    gif.src = "assets/img/cacaNiquel.jpg"
}
function chamaGif(){
    let gif = document.getElementById("gif")
    gif.src = "assets/img/Caca-Niquel.gif"
}
function escondeGif(ganhador, trofeu, button){
    document.getElementById("gif-container").style.display = displayNone()
    document.getElementById(button).style.display = displayNone()
    document.getElementById(ganhador).classList.remove("hide")
    document.getElementById(ganhador).classList.add("show") 
    document.getElementById(trofeu).classList.remove("hide")
    document.getElementById(trofeu).classList.add("show") 
    
}



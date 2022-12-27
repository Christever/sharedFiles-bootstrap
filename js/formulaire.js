function surligne(champ, erreur) {
    if (erreur) {
        champ.style.backgroundColor = "#ff7700";
    } else {
        champ.style.backgroundColor = "";
    }
}

function verifLenChaine(champs) {
    console.log(champs.value.length)
    if(champs.value.length < 2 || champs.value.length > 25) {
        surligne(champs, true);
        return false;
    }
    else {
        surligne(champs, false);
        return true;
    }
}

function verifFinal(ob) {
    const nomOk = verifLenChaine(ob.nom)

    if (nomOk) {
        return true;
    }
    else {
        alert("Il reste des erreurs");
        return false;
    }
}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chargement.css">
    <title>Document</title>
</head>
<body>
    <div class="download">
        <span class="lettre">c</span>
        <span class="lettre">h</span>
        <span class="lettre">a</span>
        <span class="lettre">r</span>
        <span class="lettre">g</span>
        <span class="lettre">e</span>
        <span class="lettre">m</span>
        <span class="lettre">e</span>
        <span class="lettre">n</span>
        <span class="lettre">t</span>     
    </div>
    <div class="accueil">
        <div class=>
            <div class="text"> 
                <h4>Bienvenue sur <br> <span>E-Daily</span></h4>
                <img src="./images/logo.jpg"  height="100px">
                <p>IME- Service</p>
            </div>
            <div class="choix">
                <button type="submit">s'incrire</button>
                <button type="submit">se connecter</button>
            </div>
        </div>
    </div>
    <script>
        const download = document.querySelector('.download');

        window.addEventListener('load', () =>{
            download.classList.add('fondu-out');
        })
    </script>
    
</body>
</html>
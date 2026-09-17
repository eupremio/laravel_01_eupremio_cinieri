<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Pagina 2</title>
</head>
<body>

<x-navbar/>

<article class="blog-article">
    @vite(['resources/js/app.js'])
    <img
        class="article-image"
        src="https://images.unsplash.com/photo-1605296867424-35fc25c9212a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="Persona che esegue delle trazioni">

    <div class="article-content">

        <span class="article-category">CALISTHENICS</span>

        <h2 class="article-title">
            Trazioni: come costruire una schiena più forte
        </h2>

        <p class="article-intro">
            Le trazioni sono uno degli esercizi fondamentali del calisthenics.
            Richiedono forza, controllo del corpo e una buona tecnica.
        </p>

        <h3 class="article-subtitle">
            Come eseguire una trazione
        </h3>

        <p class="article-text">
            Afferra la sbarra con le mani leggermente più larghe delle spalle.
            Parti con le braccia distese e il corpo sotto controllo.
            Attiva le scapole e tira il corpo verso l'alto portando il mento
            oltre la sbarra.
        </p>

        <p class="article-text">
            Durante il movimento evita di utilizzare lo slancio delle gambe.
            La salita deve essere controllata e anche la discesa deve essere
            eseguita lentamente.
        </p>

        <h3 class="article-subtitle">
            Quali muscoli lavorano?
        </h3>

        <p class="article-text">
            Le trazioni coinvolgono principalmente il gran dorsale, i bicipiti,
            i romboidi e diversi muscoli stabilizzatori del tronco e delle spalle.
        </p>

        <h3 class="article-subtitle">
            Il consiglio principale
        </h3>

        <p class="article-text">
            Se non riesci ancora a fare una trazione completa, puoi iniziare
            con esercizi propedeutici come trazioni assistite, negative e
            tenute isometriche.
        </p>

    </div>
</article>
</body>
</html>
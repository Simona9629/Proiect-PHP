<?php
//spl_autoload_register(function ($class) {
//    include '../../clase/' . $class . '.php';
//});
require_once 'ApiClient.php';
?>


<div id="content">
    <h3 style="color: #B48A7C">Quote of the day</h3>
    <?php
        $apiClient = new ApiClient();
        $apiClient->get('http://localhost/api/quote/read.php');
        $quote = $apiClient->getResponse();
        $quote = json_decode($quote);
    ?>
    <p>
        Topic: <?php print $quote->domain; ?>
        <br>
        <?php print '" ' . $quote->quote . ' "'; ?>
    </p>
    <h3 style="color: #B48A7C">Activity idea</h3>
    <p>
        <?php require_once 'bored_api.php'; ?>
    </p>
    <h3 style="color: #B48A7C">Despre noi</h3>
    <p>
        Cu toții știm importanța unei gestionări adecvate a timpului – 
        dacă îți gestionezi timpul impecabil, vei putea efectua o muncă de înaltă calitate, dar în mai puțin timp. 
        Iar instrumentele de gestionare a timpului reprezintă tehnologia care vă poate ajuta să realizați acest lucru.
    </p>
    <p>
        Aceasta aplicatie permite o organizare eficienta a datelor personale.
        Pentru simplitate datele sunt impartite in 3 categorii principale:
    </p>
    <ul>
        <li>Task-uri</li>
        <li>Evenimente</li>
        <li>Reminder</li>
    </ul>
    <p>
        Toate sarcinile adaugate vor fi disponibile in pagina de <strong>Lista taskuri</strong>,
        iar atunci cand una dintre sarcini a fost realizata aceasta poate fi marcata ca 
        finalizata si lista va fi actualizata.
        
    </p>
    <p><a href='index.php?page=2'>Let's Start Organizing!</a></p>
    
    
</div>

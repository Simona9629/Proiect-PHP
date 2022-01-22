<?php require_once 'ApiClient.php';?>
<h2>Propune un citat</h2>
<form method="post">
    <div class="form_settings">
        <p>
            <span><label for="domain">Domeniu</label></span>
            <input type="text" name="domain" id="domain" />
        </p>
        <p>
            <span><label for="quote">Citat</label></span>
            <textarea rows="8" cols="50" name="quote" id="quote"></textarea>
            
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="add" value="Adauga citat" />
        </p>
    </div>
</form>
<?php
if (isset($_POST['add'])) {
    $domain = $_POST['domain'];
    $quote = $_POST['quote'];
    
    $apiClient = new ApiClient();
    $postData = array(
        'quote' => $quote,
        'domain' => $domain
    );
    $apiClient->post('http://localhost/api/quote/create.php', $postData);
    $newQuote = $apiClient->getResponse();
    $newQuote = json_decode($newQuote, true);
    
    if (isset($newQuote['message'])) {
        print $newQuote['message'];
    } else {
        print 'Citat adaugat cu succes.';
    }
}


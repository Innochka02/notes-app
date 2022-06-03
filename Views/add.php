<?php
    //require 'smartTV.php';
    if(isset($_GET["titolo"]))
    {   //verifica che siano già stati inseriti i dati necessari per creare la nuova smart_tv     
        $titolo = $_GET["titolo"]; 
        $contenuto = $_GET["contenuto"]; 
        $dataCreazione = new DateTime();
        $dataCreazione = $dataCreazione->format('Y-m-d H:i:s');
        $id = Note::creaId();
        $newNota = new Note($titolo, $contenuto, $id, $dataCreazione);
        $bool=NoteRepository::inserisci($newNota);
        header("Location: index.php?action=showOne&id=$id");
    }
    else
    {    
?>
    <!--form per l'inserimento dei dati necessari alla creazione di una nuova smart_TV-->
    <form method = "GET" action = "index.php">
        <input type="hidden" name="action" value="add">
        <label for = "titolo">Titolo</label><br>
        <input type = "text" name = "titolo"><br>
        <label for = "contenuto">contenuto</label><br>
        <textarea name="contenuto"></textarea><br>
        <input type = "submit">    
    </form>

<?php
    }
?>
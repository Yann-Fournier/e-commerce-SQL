<?php
    // Connecetion à la BDD --------------------------------------------------------------------------------------------------------------------------------------
    
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "ecommerce";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, 
                            $db_user, 
                            $db_pass, 
                            $db_name);
        echo "You are connected";
    }
    catch(mysqli_sql_exception) {
        echo "Could not connect! <br>";
    }

    // Créations des requetes d'insertions ---------------------------------------------------------------------------------------------------------------------

    //  OK
    $user = [
        // "INSERT INTO User (UserId, Name, FirstName, Email, Password) VALUES ()" utiliser des ''
        "INSERT INTO User (UserId, Name, FirstName, Email, Password) VALUES (1, 'Yann', 'Fournier', 'yann.yann@com', 'yann')",
        "INSERT INTO User (UserId, Name, FirstName, Email, Password) VALUES (2, 'Shelby', 'Fournier', 'shelby.shelby@com', 'shelby')",
        "INSERT INTO User (UserId, Name, FirstName, Email, Password) VALUES (3, 'Moka', 'Fournier', 'moka.moka@com', 'moka')"
    ];
    $adress = [
        "INSERT INTO Adress (AdressId, UserId, Country, CodePostale, Number, Street, Town) VALUES (1, 1, 'France', 75000, 69, 'Avenue Foch', 'Paris')",
        "INSERT INTO Adress (AdressId, UserId, Country, CodePostale, Number, Street, Town) VALUES (2, 2, 'France', 75000, 69, 'Avenue Foch', 'Paris')",
        "INSERT INTO Adress (AdressId, UserId, Country, CodePostale, Number, Street, Town) VALUES (3, 3, 'France', 75000, 69, 'Avenue Foch', 'Paris')"
    ];
    // OK
    $product = [
        "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES (1, 'One piece 1', 7, 'Manga écrit par Eichiro Oda', 5, 43)",
        "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES (2, 'One piece 2', 7, 'Manga écrit par Eichiro Oda', 4, 56)",
        "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES (3, 'One piece 3', 7, 'Manga écrit par Eichiro Oda', 3, 69)",
        "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES (4, 'One piece 4', 7, 'Manga écrit par Eichiro Oda', 2, 12)",
        "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES (5, 'One piece 5', 7, 'Manga écrit par Eichiro Oda', 1, 4)"
    ];
    // OK
    $commande = [
        "INSERT INTO Commande (CommandeId, UserId) VALUES (1, 1)",
        "INSERT INTO Commande (CommandeId, UserId) VALUES (2, 2)"
    ];
    //  OK
    $cart = [
        "INSERT INTO Cart (CartId, UserId) VALUES (1,3)"
    ];
    // 0K
    $invoice = [
        "INSERT INTO Invoice (InvoiceId, CommandeId) VALUES (1, 1)",
        "INSERT INTO Invoice (InvoiceId, CommandeId) VALUES (2, 2)"
    ];
    // OK
    $commande_items = [
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (1, 1, 1)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (2, 1, 2)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (3, 1, 3)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (4, 1, 4)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (5, 2, 3)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (6, 2, 4)",
        "INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES (7, 2, 5)",
    ];
    // OK
    $cart_items = [
        "INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES (1, 1, 1)",
        "INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES (2, 1, 2)",
        "INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES (3, 1, 3)",
        "INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES (4, 1, 4)",
        "INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES (5, 1, 5)"
    ];

    // Insetion des valeurs dans la database ------------------------------------------------------------------------------------------------------------
    
    foreach($tables as $values) {
        foreach($values as $query) {
            try {
                mysqli_query($conn, $query);
            }
            catch(mysqli_sql_exception) {
                echo "User";
            } 
        }
    }
?>

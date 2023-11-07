<?php
    // Import de faker
    require('vendor/autoload.php');

    function insert_data($nbr) {
        
        $faker = Faker\Factory::create('fr_FR');

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
            echo "You are connected \n";
        }
        catch(mysqli_sql_exception) {
            echo "Could not connect! <br>";
        }

        for($i = 1; $i < $nbr+1; $i++) {
            $id = 1*$i;
            echo $id . "\n";
            // Créations des requetes d'insertions ---------------------------------------------------------------------------------------------------------------------

            $name = explode(" ",$faker->name);
            $password = $faker->realText(15);
            //  OK
            $user_query = "INSERT INTO User (UserId, Name, FirstName, Email, Password) VALUES ($id, '$name[0]', '$name[1]', '$faker->email', '$password')";
            try {
                mysqli_query($conn, $user_query);
            }
            catch(mysqli_sql_exception) {
                echo "User_query \n";
            } 

            $cp = intval($faker->postcode, 10);
            $n = $faker->numberBetween(10, 99);
            $adress_query = "INSERT INTO Adress (AdressId, UserId, Country, CodePostale, Number, Street, Town) VALUES ($id, $id, '$faker->country', $cp, $n, '$faker->streetAddress', '$faker->city')";
            try {
                mysqli_query($conn, $adress_query);
            }
            catch(mysqli_sql_exception) {
                echo "Adress_query \n";
            }

            $nameproduit = $faker->text(60);
            $description = $faker->text(90);
            $p = $faker->numberBetween(10, 99);
            $note = $faker->numberBetween(0, 5);
            $nbr2 = $faker->numberBetween(10, 99);
            $product_query = "INSERT INTO Product (ProductId, Name, Price, Description, Note, Nombre) VALUES ($id, '$nameproduit', $p, '$description', $note, $nbr2)";
            try {
                mysqli_query($conn, $product_query);
            }
            catch(mysqli_sql_exception) {
                echo "Product_query \n";
            } 

            $commande_query = "INSERT INTO Commande (CommandeId, UserId) VALUES ($id, $id)";
            try {
                mysqli_query($conn, $commande_query);
            }
            catch(mysqli_sql_exception) {
                echo "Commande_query \n";
            } 

            $cart_query = "INSERT INTO Cart (CartId, UserId) VALUES ($id,$id)";
            try {
                mysqli_query($conn, $cart_query);
            }
            catch(mysqli_sql_exception) {
                echo "Cart_query \n";
            } 

            $invoice_query = "INSERT INTO Invoice (InvoiceId, CommandeId) VALUES ($id, $id)";
            try {
                mysqli_query($conn, $invoice_query);
            }
            catch(mysqli_sql_exception) {
                echo "Invoice_query \n";
            } 

            $commande_items_query ="INSERT INTO Commande_Items (CommandeLineId, CommandeId, ProductId) VALUES ($id, $id, $id)";
            try {
                mysqli_query($conn, $commande_items_query);
            }
            catch(mysqli_sql_exception) {
                echo "Commande_items_query \n";
            } 

            $cart_items_query ="INSERT INTO Cart_Items (CartLineId, CartId, ProductId) VALUES ($id, $id, $id)";
            try {
                mysqli_query($conn, $cart_items_query);
            }
            catch(mysqli_sql_exception) {
                echo "Cart_items_query \n";
            } 
        }
    }

    insert_data(100);
?>

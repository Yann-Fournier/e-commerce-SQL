<?php
    // Connecetion à la BDD
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

    // Insetion des valeurs dans la database

    // "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    $user = [

    ];
    $adress = [

    ];
    $product = [

    ];
    $commande = [

    ];
    $cart = [

    ];
    $invoice = [

    ];
    $commande_items = [

    ];
    $cart_items = [

    ];

    foreach($user as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table user remplie";

    foreach($adress as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table adress remplie";

    foreach($product as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table product remplie";

    foreach($commande as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table commande remplie";

    foreach($invoice as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table invoice remplie";


    foreach($cart as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table cart remplie";


    foreach($commande_items as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table commande_items remplie";

    foreach($cart_items as $values) {
        // try {
        //     mysqli_query($conn, $values);
        // }
        // catch(mysqli_sql_exception) {
        //     echo "That username is taken";
        // } 
    }

    echo "table cart_items remplie";
?>

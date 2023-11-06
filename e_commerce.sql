-- Be careful of FOREIGN KEY before droping table otherwise you will get an error.
-- Drop first table with FOREIGN KEY then those with PRIMARY KEY.

DROP TABLE IF EXISTS Invoice;
DROP TABLE IF EXISTS Commande_Items;
DROP TABLE IF EXISTS Cart_Items;
DROP TABLE IF EXISTS Adress;
DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS Cart;
DROP TABLE IF EXISTS Commande;
DROP TABLE IF EXISTS User;



CREATE TABLE User (
    UserId INTEGER NOT NULL, 
    Name VARCHAR(50) NOT NULL, 
    FirstName VARCHAR(50) NOT NULL, 
    Email VARCHAR(70) NOT NULL, 
    Password VARCHAR(50) NOT NULL,
    PRIMARY KEY (UserId)
);

CREATE TABLE Adress (
    AdressId INTEGER NOT NULL, 
    UserId INTEGER NOT NULL, 
    Country VARCHAR(30) NOT NULL, 
    CodePostale INTEGER NOT NULL, 
    Number INTEGER NOT NULL, 
    Street VARCHAR(100) NOT NULL, 
    Town VARCHAR(50) NOT NULL,
    PRIMARY KEY (AdressID),
    FOREIGN KEY (UserId) REFERENCES User(UserId)
);

CREATE TABLE Product (
    ProductId INTEGER NOT NULL,
    Name VARCHAR(100) NOT NULL,
    Price INTEGER NOT NULL,
    Description VARCHAR(200) NOT NULL,
    Note INTEGER NOT NULL,
	Nombre INTEGER NOT NULL,
	Image INTEGER NOT NULL,
    PRIMARY KEY (ProductId)
);

CREATE TABLE Cart (
	CartId INTEGER NOT NULL,
	UserId INTEGER NOT NULL,
	PRIMARY KEY (CartId),
	FOREIGN KEY (UserId) REFERENCES User(UserId)
); 

CREATE TABLE Cart_Items (
	CartLineId INTEGER NOT NULL,
	CartId INTEGER NOT NULL,
	ProductId INTEGER NOT NULL,
	PRIMARY KEY (CartLineId),
	FOREIGN Key (CartId) REFERENCES Cart(CartId),
	FOREIGN Key (ProductId) REFERENCES Product(ProductId)
); 

CREATE TABLE Commande (
	CommandeId INTEGER NOT NULL,
	UserId INTEGER NOT NULL,
	PRIMARY KEY (CommandeId),
	FOREIGN KEY (UserId) REFERENCES USER(UserId)
);

CREATE TABLE Commande_Items (
	CommandeLineId INTEGER NOT NULL,
	CommandeId INTEGER NOT NULL,
	ProductId INTEGER NOT NULL,
	PRIMARY KEY (CommandeLineId),
	FOREIGN KEY (CommandeId) REFERENCES Commande(CommandeId),
	FOREIGN KEY (ProductId) REFERENCES Product(ProductId)
); 

CREATE TABLE Invoice (
	InvoiceId INTEGER NOT NULL,
	CommandeId INTEGER NOT NULL,
	PRIMARY KEY (InvoiceId),
	FOREIGN KEY (CommandeId) REFERENCES Commande(CommandeId)
);



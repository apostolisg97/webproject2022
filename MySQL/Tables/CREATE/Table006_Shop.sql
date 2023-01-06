USE webproject2022;
DROP TABLE IF EXISTS Shop;
CREATE TABLE Shop
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL DEFAULT '',
    address VARCHAR (255) NOT NULL DEFAULT '',
    description VARCHAR (255) NOT NULL DEFAULT '',
    products INT DEFAULT NULL DEFAULT '',
    has_Offer BOOLEAN NOT NULL DEFAULT FALSE,

    location VARCHAR (255) NOT NULL DEFAULT '',
    latitude DECIMAL (255) NOT NULL DEFAULT '',
    longitude DECIMAL (255) NOT NULL DEFAULT '',

    PRIMARY KEY(id)

);
SHOW TABLES;

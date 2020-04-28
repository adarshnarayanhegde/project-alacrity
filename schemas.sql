CREATE TABLE products (
    product_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(256) NOT NULL,
    product_image VARCHAR(512),
    product_category VARCHAR(256) NOT NULL,
    FOREIGN KEY (product_category) REFERENCES category(category_name)
);

CREATE TABLE category (
    category_id INTEGER NOT NULL,
    category_view_id INTEGER NOT NULL,
    category_name VARCHAR(256) PRIMARY KEY
);

insert into category values(1,1,'Hydraulic Cylinders'),
                           (2,5,'Earthmoving Hydraulic Cylinders'),
                           (1,2,'Hydraulic Rock Breakers'),
                           (1,3,'Earthmoving Spares'),
                           (1,4,'Induatrial Automation');



insert into category values('HydraulicCylinders'),
                           ('EarthmovingHydraulicCylinders'),
                           ('HydraulicRockBreakers'),
                           ('EarthmovingSpares'),
                           ('InduatrialAutomation');

CREATE 



                           
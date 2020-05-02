CREATE TABLE products (
    product_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(256) NOT NULL,
    product_image VARCHAR(512),
    product_category VARCHAR(256) NOT NULL,
    product_category_id INTEGER NOT NULL,
    FOREIGN KEY (product_category) REFERENCES category(category_name)
);

CREATE TABLE category (
    category_id INTEGER NOT NULL,
    category_view_id INTEGER NOT NULL,
    category_name VARCHAR(256) PRIMARY KEY
);

CREATE TABLE category (
    category_id INTEGER NOT NULL,
    category_view_id INTEGER NOT NULL,
    category_order_id INTEGER NOT NULL,
    category_name VARCHAR(256) PRIMARY KEY
);

insert into category values(1,1,'Hydraulic Cylinders'),
                           (2,5,'Earthmoving Hydraulic Cylinders'),
                           (1,2,'Hydraulic Rock Breakers'),
                           (1,3,'Earthmoving Spares'),
                           (1,4,'Induatrial Automation');


insert into category values(1,1,1,'Hydraulic Cylinders'),
                           (2,2,5,'Earthmoving Hydraulic Cylinders'),
                           (3,1,2,'Hydraulic Rock Breakers'),
                           (4,1,3,'Earthmoving Spares'),
                           (5,1,4,'Induatrial Automation');

insert into category values('HydraulicCylinders'),
                           ('EarthmovingHydraulicCylinders'),
                           ('HydraulicRockBreakers'),
                           ('EarthmovingSpares'),
                           ('InduatrialAutomation');

    CREATE TABLE order_details (
        order_reference varchar(256)    PRIMARY KEY,
        name varchar(256) NOT NULL,
        phone_number varchar(256) NOT NULL,
        email varchar(256) NOT NULL,
        service varchar(256) NOT NULL,
        product varchar(256) NOT NULL,
        description varchar(256) NOT NULL
    );

select order_reference,name,phone_number,email,service,product,description from order_details

CREATE TABLE order_index(
    id int PRIMARY KEY
);

insert into order_index values(100);

CREATE TABLE contacts(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name varchar(256) NOT NULL,
    phone_number varchar(256) NOT NULL,
    email varchar(256) NOT NULL,
    description varchar(256) NOT NULL
);


update products set product_category='Industrial Automation' where product_category='Induatrial Automation';     

update category set category_name='Industrial Automation' where category_name='Induatrial Automation';    

alter table products drop foreign key products_ibfk_1;

alter table products add FOREIGN KEY (product_category) REFERENCES category(category_name);
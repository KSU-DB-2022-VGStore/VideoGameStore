create database korby_store;

 create table game(
    game_id char(5) not null,
    name varchar(20) not null,
    console varchar(20),
    genre varchar(20),
    price numeric(10,2),
    publisher_id varchar(20),
    esrb char(1),
    
    primary key(game_id),
    foreign key(publisher_id) references publisher(publisher_id)
 );

 create table publisher(
    publisher_id char(5) not null,
    publisher_name varchar(20) not null,

    primary key(publisher_id)
 );

create table employee(
    employee_id char(5) not null,
    employee_name varchar(20) not null,
    role varchar(20) not null, 
    salary numeric(10,2) not null,
    
    primary key(employee_id)
);

create table customer(
    customer_id char(5) not null,
    member_name varchar(20) not null,
    employee_id char(5) not null,
    
    primary key(customer_id),
    foreign key(employee_id) references employee(employee_id)
);

create table purchase( /*since order is keyword*/
    order_id char(5) not null,
    order_price numeric(10,2) not null,
    discount numeric(1,2),
    status_code varchar(20), /*since status is keyword*/
    employee_id char(5) not null,
    customer_id char(5) not null,
    
    primary key(order_id),
    foreign key(customer_id) references customer(customer_id),
    foreign key(employee_id) references employee(employee_id)
);

create database korby_store;

 create table game(
    game_id char(5) not null,
    game_name varchar(30) not null,
    console varchar(30),
    price decimal(4,2),
    publisher varchar(30),
    release_year year,
    esrb varchar(10),
    
    primary key(game_id)
 );
 
create table merchant(
    merchant_id char(5) not null,
    merchant_name varchar(30) not null,
    sales int not null,
    
    primary key(merchant_id)
);

create table employee(
    employee_id char(5) not null,
    employee_name varchar(30) not null,
    role varchar(30) not null, 
    salary decimal(8,2) not null,
    
    primary key(employee_id)
);

create table member(
    member_id char(5) not null,
    member_name varchar(30) not null,
    mailing_address varchar(50) not null,
    reward_member bool not null,
    points int,
    
    primary key(member_id)
);

create table purchase(
    purchase_id char(5) not null,
    member_id char(5) not null,
    game_id char(5) not null,
    price decimal(8,2) not null,
    purchase_status varchar(10) not null,
    
    primary key(purchase_id),
    foreign key(member_id) references member(member_id),
    foreign key(game_id) references game(game_id)
);

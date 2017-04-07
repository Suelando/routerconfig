create database router_config default charset=latin1;
use router_config;

create table route_monitor(
  id_route_monitor int unsigned not null auto_increment,
  id_config_router int unsigned not null,
  status_network int not null,
  dthr_monitoring datetime not null,
  last_time_comunication current_time not null,
  last_date_comunication current_date not null,
  constraint pk_network_monitor Primary key (id_route_monitor)
);
alter table route_monitor AUTO_INCREMENT=100;

create table status_route(
	id_status int unsigned not null auto_increment,
	id_config_router int unsigned not null,
	dthr_status datetime not null,
	status int not null,
	id_type_status int not null,
	ping_requested varchar(485),
	constraint pk_status_route Primary Key (id_status)
);
alter table status_route AUTO_INCREMENT=200;

create table users_routers(
	id_user int unsigned not null auto_increment,
	status_user int not null,
	name_user varchar(40) not null,
	password varchar(50) not null,
	constraint pk_users_routers Primary Key (id_user)
);
alter table users_routers AUTO_INCREMENT=300;

insert into users_routers(status_user,name_user,password)
	values(1,'supervisor','123'),(1,'$suporte','*123')

create table config_routers(
	id_config_router int unsigned not null auto_increment,
	ip_network varchar(16) not null,
	ip_mask varchar(16) not null,
	ip_next_jump varchar(16) not null,
	id_user int unsigned not null,
	date_create timestamp not null default current_timestamp,
	constraint pk_config_routers Primary Key (id_config_router)
);
alter table config_routers AUTO_INCREMENT=400;

create table abount(
	informations varchar(70) not null,
	last_update timestamp not null default current_timestamp,
	company varchar(20)
);

insert into abount(informations,company)
	values('There is a web application designed to manage routes by the route manager','IFPB');

create table version(
	name varchar2(40) not null,
	version varchar2(10) not null,
	company varchar2(20) not null,
	date_create date not null,
	last_update timestamp not null default current_timestamp, 
);

insert into version (name,version,company,date_create )
	values('Router Config System','1.0.0.0_17','IFPB',now());

create table history(
  id_type_change int unsigned not null,
	date timestamp not null default current_timestamp, 
	id_user int not null
);

create table type_change(
	id_type_change int unsigned not null auto_increment,
	changer varchar(30) not null,
    constraint pk_type_chage primary key (id_type_change)
);
alter table type_change AUTO_INCREMENT=600;

insert into type_change(changer)
value ('Added');
insert into type_change(changer)
value('Removed');
insert into type_change(changer)
value('Rebooted');
insert into type_change(changer)
value('Changed the language');
insert into type_change(changer)
value('Observed');

create table type_status(
  id_type_status int not null,
  name varchar(17),
  constraint pk_type_status Primary Key (id_type_status)
);

insert into type_status(id_type_status,name)
  value(1,'UP'),(0,'DOWN');

create database router_config default charset=latin1;
use router_config;

---------------------------------
create table route_monitor(--Table para monitoramento das rotas
  id_route_monitor int unsigned not null auto_increment,
  id_config_router int unsigned not null,
  status_network int not null,
  dthr_monitoring datetime not null,
  last_time_comunication current_time not null,
  last_date_comunication current_date not null,
  constraint pk_network_monitor Primary key (id_route_monitor),
);
alter table route_monitor AUTO_INCREMENT=100;--Incrementar a partir de 100

---------------------------------
create table status_route(
	id_status int unsigned not null auto_increment,
	id_config_router int unsigned not null,
	dthr_status datetime not null,
	status int not null,
	id_type_status int not null,
	ping_requested varchar2(485),--Armazena o retorno do ping na interface.
	constraint pk_status_route Primary Key (id_status),
	constraint Fk_status_route_network_monitor Foreign key (id_route_monitor) references route_monitor
);
alter table status_route AUTO_INCREMENT=200;--Incrementar a partir de 200

---------------------------------
create table users_routers(--Criação de usuários de sistema
	id_user int unsigned not null auto_increment,
	status_user int not null,
	name_user varchar2(40) not null,
	password varchar2(50) not null,
	constraint pk_users_routers Primary Key (id_user)
);
alter table users_routers AUTO_INCREMENT=300;--Incrementar a partir de 300

---Insert Tabela users_routers---
insert into users_routers(status_user,name_user,password)
	values(1,'supervisor','123'),(1,'$suporte','*123')

---------------------------------
create table config_routers(--Rotas configuradas no sistema
	id_config_router int unsigned not null auto_increment,
	ip_network varchar2(16) not null,
	ip_mask varchar2(16) not null,
	ip_next_jump varchar2(16) not null,
	id_user int unsigned not null,
	date_create timestamp not null default current_timestamp,
	constraint pk_config_routers Primary Key (id_config_router),
	constraint Fk_config_routers_network_monitor Foreign key (id_route_monitor) references route_monitor
);
alter table config_routers AUTO_INCREMENT=400;--Incrementar a partir de 400





---------------------------------
create table abount(
	informations varchar2(70) not null,
	last_update timestamp not null default current_timestamp, --Será setada a data atual no momento do insert.
	company varchar2(20)
);

------Insert Tabela abount------
insert into abount(informations,company)
	values('RouterConfig is a web application designed to manage routes by the route manager'.'IFPB');

---------------------------------
create table version(
	name varchar2(40) not null,
	version varchar2(10) not null,
	company varchar2(20) not null,
	date_create date not null,
	last_update timestamp not null default current_timestamp, --Será setada a data atual no momento do insert.
);

------Insert Tabela version------
insert into version (name,version,company,date_create )
	values('Router Config System','1.0.0.0_17','IFPB',now());

---------------------------------
create table history(
  id_type_change int unsigned not null,
	date timestamp not null default current_timestamp, --Será setada a data atual no momento do insert.
	id_user int not null,
	constraint fk_users_routers_history Foreign Key (id_user) references users_routers --id_user é chave estrangeira para tabela users_routers
);

---------------------------------
create table type_change(
	id_type_change int unsigned not null auto_increment,
	change varchar2(30) not null,
	constraint pk_type_change Primary Key (id_type)
);
alter table type_change AUTO_INCREMENT=600;--Incrementar a partir de 500

----Insert Tabela type_change----
insert into type_change(change)
value ('Added');
insert into type_change(change)
value('Removed');
insert into type_change(change)
value('Rebooted');
insert into type_change(change)
value('Changed the language');
insert into type_change(change)
value('Observed');


---------------------------------
create table type_status(
  id_type_status int not null,
  name varchar2(17)
);

----Insert Tabela type_status----
insert into type_status(id_type_status,name)
  value(1,UP),(0,DOWN);

---------------------------------

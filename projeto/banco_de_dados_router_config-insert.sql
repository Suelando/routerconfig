=================TABELAS USERS_ROUTERS===================
--Criar um usuário
insert into users_routers(status_user,name_user,password,cargo,setor)
	values(1,'nome','123','cargo','setor');
===========================================================

=================TABELAS HISTORY===================
--Inserir historico de uso da aplicação
insert into history(id_type_change,id_user)
	values('','');
===========================================================

=================TABELAS INTERFACES===================
insert into interfaces(name_iface,static,address,netmask,gateway,network,id_type_status)
	values('',,'','','','',);

delete from interfaces
	where id_iface = [colocar o ID que deverá ser excluído]
===========================================================

=================TABELAS CONFIG_ROUTERS===================
insert into config_routers(ip_network,ip_mask,ip_next_jump,id_user)
	values('','','',);

delete config_routers
	where id_config_router = [colocar o ID que deverá ser excluído]
===========================================================

=================TABELAS ===================

  insert into config_routers(id_config_router,ip_network,ip_mask,ip_next_jump,id_user,date_create)
	values();
  
  
  




===========================================================

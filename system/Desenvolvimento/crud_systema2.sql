show tables
drop table clientes

CREATE TABLE clientes  (
   idclientes  INT NOT NULL auto_increment,
   nome  VARCHAR(100) NULL,
   endereco  VARCHAR(60) NULL,
   bairro  VARCHAR(60) NULL,
   cidade  VARCHAR(40) NULL,
   telefone1  VARCHAR(15) NULL,
   telefone2  VARCHAR(15) NULL,
   email  VARCHAR(200) NULL,
   cep  VARCHAR(30) NULL,
   uf  VARCHAR(4) NULL,
   fax  VARCHAR(15) NULL,
   cpf_cnpj  VARCHAR(30) NULL,
   tipo_pessoa  VARCHAR(30) NULL,
  PRIMARY KEY ( idclientes ))

insert into clientes (nome, endereco, bairro, cidade, telefone1, telefone2, email, cep, uf, fax, cpf_cnpj, tipo_pessoa)
values ('gui','rua','dsdsd','teresina','2211212','32213', '@@@@', '4343', 'pi', '32232', '322312213', 'física' )
select * from clientes

delete from clientes where idclientes>=3

CREATE TABLE funcionarios   (
    idfuncionarios   INT NOT NULL auto_increment,
    nome   VARCHAR(100) NULL,
    cpf   VARCHAR(30) NULL,
    rg   VARCHAR(30) NULL,
    cidade   VARCHAR(40) NULL,
    bairro   VARCHAR(60) NULL,
    telefone1   VARCHAR(15) NULL,
    telefone2   VARCHAR(15) NULL,
    celular   VARCHAR(15) NULL,
    email   VARCHAR(200) NULL,
    cargo   VARCHAR(50) NULL,
    departamento   VARCHAR(50) NULL,
    data_nascimento   DATE NULL,
    num_carteira   VARCHAR(50) NULL,
    uf   VARCHAR(4) NULL,
    cep   VARCHAR(30) NULL,
  PRIMARY KEY (idfuncionarios))




insert into 
funcionarios (nome, cpf, rg, cidade, bairro, telefone1, telefone2, celular, email, cargo, departamento, data_nascimento, num_carteira, uf, cep)
values ('ggg', '32323', '43232', 'teresina', 'centro', '321321', '3123213', '999999', '@@@@', 'dddd', 'dsdasd', '1999-04-04', '333', 'PI', '65222')

select * from clientes

delete from funcionarios where idfuncionarios>=2


CREATE TABLE ordem_servico  (
   idordem_servico  INT NOT NULL auto_increment,
   idcliente_servico  INT NOT NULL,
   idfuncionario int not null,
   data_servico DATE NULL,
   valor_total  DOUBLE NULL,
   observacao   varchar(200),
   status_ordem int,
  PRIMARY KEY ( idordem_servico ),
  INDEX  fk_ordem_servico_clientes_idx  ( idcliente_servico  ASC),
  CONSTRAINT  fk_ordem_servico_clientes 
    FOREIGN KEY ( idcliente_servico )
    REFERENCES clientes  ( idclientes )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)




ALTER TABLE ordem_servico
ADD FOREIGN KEY (idfuncionario )
REFERENCES funcionarios(idfuncionarios) ON DELETE NO ACTION
    ON UPDATE NO ACTION  


select * from funcionarios
drop table ordem_servico

insert into ordem_servico (idcliente_servico, idfuncionario, data_servico, valor_total,observacao, status_ordem) values (2, 1,'2018-02-05',33.45,'conserta',1)

select * from ordem_servico
show tables

update ordem_servico set status_ordem=0 where idordem_servico=3

delete from ordem_servico where idordem_servico=1

select * from vs_ordem_servico

drop view vs_ordem_servico

create view  vs_ordem_servico as

	select
	
	clientes.nome,
	clientes.endereco,
	clientes.cep,
	clientes.uf,
	clientes.bairro,
    clientes.telefone1,
	ordem_servico.data_servico,
	ordem_servico.observacao,
    ordem_servico.status_ordem,
	ordem_servico.idordem_servico,
	funcionarios.idfuncionarios,
	funcionarios.nome as nomefuncionario
	from ordem_servico 
	join clientes  on clientes.idclientes=ordem_servico.idcliente_servico
	join funcionarios on funcionarios.idfuncionarios=ordem_servico.idfuncionario 


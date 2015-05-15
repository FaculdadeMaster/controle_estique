create database servico

CREATE TABLE usuario (
  idusuario INT NOT NULL,
  nome VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  PRIMARY KEY (idusuario))

CREATE TABLE clientes (
  idclientes INT NOT NULL,
  nome VARCHAR(100) NULL,
  endereco VARCHAR(60) NULL,
  bairro VARCHAR(60) NULL,
  cidade VARCHAR(40) NULL,
  telefone1 VARCHAR(15) NULL,
  telefone2 VARCHAR(15) NULL,
  email VARCHAR(200) NULL,
  cep VARCHAR(30) NULL,
  uf VARCHAR(4) NULL,
  fax VARCHAR(15) NULL,
  cpf_cnpj VARCHAR(30) NULL,
  tipo_pessoa VARCHAR(30) NULL,
  PRIMARY KEY (idclientes))

CREATE TABLE IF NOT EXISTS  ordem_servico  (
   idordem_servico  INT NOT NULL,
   idcliente_servico  INT NOT NULL,
   data_entrada  DATE NULL,
   data_saida  DATE NULL,
   telefone1  VARCHAR(15) NULL,
   telefone2  VARCHAR(15) NULL,
   descricao  VARCHAR(500) NULL,
   forma_pagemento  VARCHAR(50) NULL,
   condicoes  VARCHAR(200) NULL,
   valor_produto  DOUBLE NULL,
   valor_desconto  DOUBLE NULL,
   valor_mao_obra  DOUBLE NULL,
   valor_total  DOUBLE NULL,
  PRIMARY KEY ( idordem_servico,  idcliente_servico ))
  
ALTER TABLE ordem_servico 
ADD FOREIGN KEY (idcliente_servico)
REFERENCES clientes(idclientes)

CREATE TABLE funcionarios  (
   idfuncionarios  INT NOT NULL,
   nome  VARCHAR(100) NULL,
   cpf  VARCHAR(30) NULL,
   rg  VARCHAR(30) NULL,
   cidade  VARCHAR(40) NULL,
   bairro  VARCHAR(60) NULL,
   telefone1  VARCHAR(15) NULL,
   telefone2  VARCHAR(15) NULL,
   celular  VARCHAR(15) NULL,
   email  VARCHAR(200) NULL,
   cargo  VARCHAR(50) NULL,
   departamento  VARCHAR(50) NULL,
   banco  VARCHAR(50) NULL,
   conta_bancaria  VARCHAR(60) NULL,
   agencia  VARCHAR(60) NULL,
   data_nascimento  DATE NULL,
   num_carteira  VARCHAR(50) NULL,
   uf  VARCHAR(4) NULL,
   cep  VARCHAR(30) NULL,
  PRIMARY KEY ( idfuncionarios ))





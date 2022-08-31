# fomulario
formulário  de cadastro de clientes  utilizando html, css, php e mysql.
 
 Abaixo os  comnandos sql para criar o banco
 
 ##
 
 -SQL para criar  a tabela no  banco de dados.
  - O banco foi nomeado como "banco1".




CREATE TABLE `banco1`.`usuario` (
  
  `id` INT NOT NULL AUTO_INCREMENT,
  
  `nome` VARCHAR(45) NOT NULL,
  
  `email` VARCHAR(120) NOT NULL,
  
  `telefone` VARCHAR(15) NOT NULL,
  
  `sexo` VARCHAR(15) NOT NULL,
  
  `data_nascimento` DATE NOT NULL,
  
  `cidade` VARCHAR(45) NOT NULL,
  
  `estado` VARCHAR(45) NOT NULL,
  
  `endereco` VARCHAR(45) NOT NULL,
  
  PRIMARY KEY (`id`));


 

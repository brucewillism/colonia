DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `USER_NOME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(110) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_cat` varchar(45) COLLATE utf8_unicode_ci NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categorias` (`id`, `nome_cat`) VALUES
(1,'Pescador'),
(2,'Pescador caicara');

DROP TABLE IF EXISTS `estado_civil`;

CREATE TABLE `estado_civil` (
  `id` int(110) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_est` varchar(45) COLLATE utf8_unicode_ci NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `estado_civil` (`id`, `nome_est`) VALUES
(1,'Solteiro(A)'),
(2,'Casado(A)'),
(3,'Divorciado(A)'),
(4,'Viuvo(A)');


DROP TABLE IF EXISTS `pescadores`;

CREATE TABLE `pescadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `matricula` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco`varchar(245)NOT NULL,
  `bairro` varchar(45)NOT NULL,
  `estado` varchar(45)NOT NULL,
  `cpf` varchar(50)NOT NULL,
  `titulo` varchar(50)NOT NULL,
  `profissional` varchar(50)NOT NULL,
  `pis` varchar(50)NOT NULL,
  `nascimento` varchar (50) NOT NULL,
  `rgp` varchar(45)NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `dependente` varchar(255)NOT NULL,
  `data_ins` varchar (45) NOT NULL,
  `insc_inss` varchar(45)NOT NULL,
  `rg` varchar (50) NOT NULL,
  `orgao` varchar (50) NOT NULL,
  `assinatura_socio` varchar(45)NOT NULL,
  `assinatura_presidente`varchar(45)NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
   FOREIGN KEY (id_categoria) REFERENCES categorias(id),
   FOREIGN KEY (id_estado) REFERENCES estado_civil(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `fotos` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `nome` varchar(60) NOT NULL,
 `conteudo` mediumblob NOT NULL,
 `tipo` varchar(20) NOT NULL,
 `tamanho` int(10) unsigned NOT NULL,
 `id_pescador` int(11) NOT NULL,
PRIMARY KEY (`id`),
FOREIGN KEY (id_pescador) REFERENCES pescadores(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

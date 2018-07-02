CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `USER_NOME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `pescadores` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `matricula` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco`varchar(45)NOT NULL,
  `bairro` varchar(45)NOT NULL,
  `estado` varchar(45)NOT NULL,
  `identidade` varchar(50)NOT NULL,
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
  `estado_civil` varchar (50) NOT NULL,
  `assinatura_socio` varchar(45)NOT NULL,
  `assinatura_presidente`varchar(45)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `pescadores_caicaras` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `matricula` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco`varchar(45)NOT NULL,
  `bairro` varchar(45)NOT NULL,
  `estado` varchar(45)NOT NULL,
  `identidade` varchar(50)NOT NULL,
  `cpf` varchar(50)NOT NULL,
  `nascimento` varchar (50)NOT NULL,
  `rgp` varchar(45)NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `dependente` varchar(255)NOT NULL,
  `data_ins` varchar (45) NOT NULL,
  `insc_inss` varchar(45)NOT NULL,
  `rg` varchar (50)NOT NULL,
  `estado_civil` varchar (50) NOT NULL,
  `assinatura_socio` varchar(45)NOT NULL,
  `assinatura_presidente`varchar(45)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
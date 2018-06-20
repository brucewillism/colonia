CREATE TABLE `pescadores` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `matricula` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco`varchar(45)NOT NULL,
  `bairro` varchar(45)NOT NULL,
  `estado` varchar(45)NOT NULL,
  `indentidade` int(11)NOT NULL,
  `cpf` int(15)NOT NULL,
  `titulo` int(15)NOT NULL,
  `profissional` int(15)NOT NULL,
  `pis` int(15)NOT NULL,
  `nascimento` date NOT NULL,
  `rgp` varchar(45)NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `dependente` varchar(255)NOT NULL,
  `data` date NOT NULL,
  `insc_inss` varchar(45)NOT NULL,
  `rg` int (15)NOT NULL,
  `estado_civil` ENUM('Solteiro', 'Casado', 'Divorciado', 'Viuva'),
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
  `indentidade` int(11)NOT NULL,
  `cpf` int(15)NOT NULL,
  `nascimento` date NOT NULL,
  `rgp` varchar(45)NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `dependente` varchar(255)NOT NULL,
  `data` date NOT NULL,
  `insc_inss` varchar(45)NOT NULL,
  `rg` int (15)NOT NULL,
  `estado_civil` ENUM('Solteiro', 'Casado', 'Divorciado', 'Viuva'),
  `assinatura_socio` varchar(45)NOT NULL,
  `assinatura_presidente`varchar(45)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `USER_NOME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
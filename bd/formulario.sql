CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `USER_NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_MATRICULA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_DISCIPLINA` varchar(255) NOT NULL,
  `USER_EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assinatura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `select_tipo` varchar(255) NOT NULL,
  `user_id` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `nome_estudante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(255) NOT NULL,
  `select_motivo` varchar(255) NOT NULL,
  `relato` varchar(255) NOT NULL,
  `nome_receptor` varchar(255) NOT NULL,
  `assinatura_receptor` varchar(255) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


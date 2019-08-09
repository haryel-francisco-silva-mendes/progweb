#seleciona todas as colunas da tabela paciente
SELECT * FROM paciente;

#seleciona colunas especificas da tabela
SELECT nome, convenio FROM paciente; 

#seleciona colunas nomeadas da tabela
SELECT nome AS 'NOME PACIENTE',convenio AS 'CONVENIO' FROM paciente;

#seleciona todas as colunas ordenando por convenio
SELECT * FROM paciente ORDER BY convenio;

#contar a quantos pacientes tem o convenio unimed
SELECT COUNT(id_paciente) AS 'quantia de pacientes' FROM paciente  WHERE convenio = 'unimed';

#seleciona todas as colunas com o nome pesquisado
SELECT * FROM paciente WHERE nome = 'enzo';

#seleciona todas as colunas com letras semelhantes
SELECT * FROM paciente WHERE nome LIKE 'en%' AND convenio = 'funeraria caichotim';

#trazendo email 
SELECT * FROM paciente WHERE nome LIKE 'vale%' AND convenio = 'unimed' AND email = '@hotmail.com';

#mostrar todo mundo que o nome comeca com uma vogal

SELECT * FROM paciente WHERE nome  LIKE 'a%' OR nome   LIKE 'e%' OR nome  LIKE 'i%' OR nome  LIKE 'o%' OR nome  LIKE 'u%'  ;


SELECT * FROM paciente WHERE nome NOT LIKE 'a%' and nome  NOT LIKE 'e%' and nome NOT LIKE 'i%' and nome NOT LIKE 'o%' and nome NOT LIKE 'u%'  ;

#insert - INSERT into tabela() values(1,'nome','1234')
#INSERT -INSERT into tabela(nome,telefone) values(nome'senha')

#exemplo insert com colunas nomeadas
#INSERT INTO paciente() VALUES(101,'zelda','19123456','666','bill@janela.com','microsoft'); 

#usa-se virgula para insirir varios valores
INSERT INTO paciente(nome,telefone,celular,email,convenio) VALUES('willian gates','19123456','666','bill@janela.com','microsoft'),
('mario','123','34512','cogumelo@gmail','vila dos cogumelos'),
('zumbi','1234123','1232324','@morto.com','semiterio'); 

SELECT * FROM paciente;

#insert com SELECT para duplicar os campos
INSERT INTO paciente (nome,convenio)
SELECT nome, convenio FROM paciente
WHERE convenio = 'unimed';
 
 SELECT * FROM  paciente;
 #innsere na tabela convenio toda tabela paciente
 INSERT INTO convenio (nome)
SELECT convenio FROM paciente
GROUP BY convenio;

SELECT * FROM  paciente;

#apaga tudo TRUNCATE convenio; trunkate é do mal

# DELETE FROM convenio WHERE id_convenio = 1; nunca use delete sem where 
#delete com condicional 
DELETE FROM convenio WHERE (id_convenio >=2) AND (id_convenio <=5);
SELECT * FROM  convenio;bd_consultoriobd_consultorio
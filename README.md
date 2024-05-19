# Gerador de Corridas
## Vai de Taxi

## Decisões técnicas e arquitetura
	- Para esse projeto utilizei uma arquitetrua simples separada em index.php como classe principal
	bootstrap.php como classe para carregar outras classes na classe principal, functions.php, que contém
	funções auxiliares para input e output json (seguindo requisito) e a classe espera_corrida.php, uma
	classe secundaria onde contém o tempo de espera e o processo de cancelamento da corrida.

## Modos de Compilação
	- Abrir o projeto no Eclipse PHP IDE
	- utilizar o servidor "pre-build" do proprio eclipse ou alguma ferramenta externa como "xampp"
	- executar o arquivo index.php (no caso do Eclipse) ou digitando browser a url "localhost:porta/src/index.php
	
## Notas adicionais
	- Tentei entrar em contato para retirar algumas duvidas referente ao projeto, porém como não obtive resposta inferi algumas informações como: input/output json nome, endereço de saída e destino. Após o envio da corrida ter um tempo
	de espera de 15 minutos com a possibilidade de um botão referente ao cancelamento.
## Requisitos para primeira execução:
   > - Docker instalado e em execução na máquina destino<br>
   > - Conexão com a internet (para baixar os arquivos)<br>
   > - Acesso a alguma linha de comando (CLI)<br>
   > - Acesso a algum web browser<br>

# Passo a passo
Clone o repositório no diretório desejado da sua máquina através da CLI
```sh
git clone -b feature-formconvidado https://github.com/pingueventos/webpage pingu-webpage
```

Acesse o diretório clonado através da CLI
```sh
cd pingu-webpage
```


Suba os containers do projeto através da CLI
```sh
docker-compose up -d
```

Acesse o projeto acessando o link abaixo em algum web browser<br>
[http://localhost:1606](http://localhost:1606)

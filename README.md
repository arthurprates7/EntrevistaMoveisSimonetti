# Móveis Simonetti - Projeto Blog - Processo Seletivo

![alt text](https://i.postimg.cc/8PpNLtTM/Sem-t-tulo.png)

Projeto criado na intenção de uma Entrevista de Emprego na Móveis Simonetti.
A propostas seria um blog WEB que conta com uma API e algumas páginas WEB.

# Funcionalidades

  - Permite aos usuários visualizar todas as notícias do blog
  - Permite aos usuários visualizarsomente uma notícia do blog
  - Permite aos usuários enviarem um formulário de contato no Site
  - Permite aos administradores terem acesso a todos os contatos através da API
  - Permite aos administradores terem acesso a todos as notícias através da API
  - Permite aos administradores terem acesso notícias específicas através da API
 
 

## Tecnologias utilizadas

Este Projeto usou as seguintes Tecnologias:

* PHP - Linguagem de Programação
* HTML, CSS, JS - Criação de Páginas WEB
* GIT - Versionamento de Código
* MySQL - Banco de Dados
* Slim Framework - MicroFramework PHP usado para contruir API's
* Apache - Servidor WEB
* GitHub - Repositório do código
* Utilizado Template HTML do site: https://onepagelove.com/furnish

### API

- A API contruída foi feita através de rotas:
- /blog/feed ( trás todas notícias do blog )
- /blog/feed/search ( pesquisa uma notícia específica do blog )
- /blog/contacts ( lista todos os formulários de contato registrados no blog )
- /blog/store/contact ( rota responsável por receber o formulário de contato e registrar no banco de dados )

Prints de tela correspondentes a cada rota ( foi utilizado um programa chamado Insomnia ) :

- Todos os Feeds => ( https://imgur.com/a/n3l2b6Q )
- Notícia Específica => ( https://imgur.com/a/3fgB6ZN )
- Todos os Contatos => ( https://imgur.com/a/occ3nIw )
- Registrar Formulário de Contato => ( https://imgur.com/a/2G0Y80g )

### Instalação

O projeto requer um servidor Apache e o PHP instalado na Máquina para funcionar.

- Após baixar o projeto na máquina faça o seguinte procedimento para iniciar a API usando o (PowerShell ou o CMD do Windows) :

```sh
$ cd API
$ php -S localhost:8080  ./src/index.php
```

 - Instale o DUMP do Banco de Dados em um Servidor MySQL. 

- Copie o conteúdo da pasta Site para a pasta pública do seu servidor

- Abra o navegador e veja o conteúdo sendo carregado.



### Slides de Instalação

- Download: https://drive.google.com/file/d/1OwPtbXjiCIQpKJTWtz14mGbmEPm93ygS/view?u=sharing




## Browsers Suportados

![Chrome](https://raw.github.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png) | ![Firefox](https://raw.github.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png) | ![Safari](https://raw.github.com/alrra/browser-logos/master/src/safari/safari_48x48.png) | ![Opera](https://raw.github.com/alrra/browser-logos/master/src/opera/opera_48x48.png) | ![Edge](https://raw.github.com/alrra/browser-logos/master/src/edge/edge_48x48.png) | ![IE](https://raw.github.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png) |
--- | --- | --- | --- | --- | --- |
Mais recente  | Mais recente  | Mais recente | Mais recente  | Mais recente  | 11  |


## Dúvidas Sobre a Instalação
- Qualquer dúvida me envie um email: arthur.prates7@gmail.com
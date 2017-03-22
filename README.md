# RouterConfig

## Descrição

Aplicação desenvolvida para auxiliar analistas de redes em suas atividades de configuração e monitoramento de rotas. Através de uma aplicação web será possível obter uma aplicação servidora que ofereça suporte até para profissionais com pouco conhecimento téorico.

## Objetivo

Desenvolver uma aplicação utilizando o conhecimento adquirido na disciplina para criar ou excluir rotas no SO Linux e verificar o funcionamento das rotas existentes.

## Inspiração

A dificuldade em configurar uma rota em ambientes linux, estimula a desenvoler uma aplicação que torne mais fácil o aprendizado deste assunto nos cursos de redes de computadores. 

... na **Figura 1**

*Figura 1 - Tela de Adição de Rota*
![Tela de Adição de Rota](doc/img/paginaAdicaoRota.jpg "Tela de Adição de Rota")

## Protótipos

*Figura 2 - Tela com tabela de Monitoramento*
![Tela com tabela de Monitoramento](doc/img/pagina1.jpg "Tela de Adição de Rota")

## Comandos

#### Ativar encaminhamento
>  echo "1" > /proc/sys/net/ipv4/ip_forward

### Visualizar tabela de rotas
> route -n

### Adicionar uma rota
> route add -net {$network} netmask {$netmask} gw {$gateway} dev {$interface}

### Apagar uma rota
> route del -net {$network} netmask {$netmask} gw {$gateway} dev {$interface}

## Instalação

Para o funcionamento desta aplicação será necessário um ambiente computacional com servidor web(apache) e banco de dados(MySQL).
Colocando estes serviços funcionando com todos os artefatos disponibilizados será possível obter o ambiente para qual foi desenvolvido.

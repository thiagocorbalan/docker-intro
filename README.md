### Listar imagens no docker

```bash
$ docker image ls
```

### Criando uma imagem a partir de um Dockerfile

```bash
$ docker build -t mysql-image -f api/db/Dockerfile .
```

`-t` é nome da TAG que será dada a imagem.
`-f` especifica o arquivo Dockerfile para gerar a imagem
`.` significa que o contexto para gerar a imagem  vai ser da pasta no qual eu estou executando o comando no momento, ou seja,  como se a imagem estivesse sendo construida na pasta atual.

### Criando um container

```bash
$ docker run -d --rm --name mysql-container mysql-image
```

`d` será executada em background
`rm` significa que se o container já exisitir, ele vai ser removido para que um novo possa ser criado.
`--name` nome do container

#### Criando um container compartilhando o volume
```bash
$ docker run -d -v $(pwd)/api/db/data:/var/lib/mysql--rm --name mysql-container mysql-image
``` 


### Executando um script para dentro do container

```bash
$ docker exec -i mysql-container mysql -uroot -pprogramadorabordo < api/db/script.sql
```
`-uroot`: usuário onde `-u` indica que é user
`-pprogramadorabordo` senha onde `-p` indica que é password

### Acessando o container
```bash
$ docker exec -it mysql-container /bin/bash
```

### Mostra os detalhes de rede criados para o container
```bash
$ docker inspect mysql-container
```





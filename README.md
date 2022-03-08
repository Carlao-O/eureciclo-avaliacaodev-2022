# Desafio de programação
Neste projeto foram implementados alguns dos requisitos propostos pelo [Desafio de Programação](https://github.com/eureciclo/avaliacao_dev) da Eu Reciclo.

### Ambiente
- PHP 8.1.3
- Laravel Framework 9.3.1
- Sail 8.0
- MySQL 8.0

### Ferramentas de Suporte
- [GitHub](https://github.com/Carlao-O/eureciclo-avaliacaodev-2022): versionamento de código
- [GitFlow](https://nvie.com/posts/a-successful-git-branching-model/): fluxo de trabalho
- [Gitmoji](https://gitmoji.dev/): padronização de commits

### Tema utilizado no projeto
- [Flexy - V. Bootstrap Lite](https://www.wrappixel.com/templates/flexy-admin-lite/)

### Acesse o projeto
- [Eu Reciclo - Avaliação Dev](https://eureciclo-avaliacaodev.herokuapp.com/)

---
## Instruções
Abra um terminal e execute os seguintes comandos:
<br/>
01 - Realizar o clone do projeto:
```
git clone https://github.com/Carlao-O/eureciclo-avaliacaodev-2022.git
cd eureciclo-avaliacaodev-2022
```
02 - Instalar as dependências do Composer:
```
composer install
```
03 - Rodar o projeto com o Sail:
```
./vendor/bin/sail up -d
```
04 - Criar um novo arquivo de configurações de ambiente:
```
cp .env.example .env
```
05 - Gerar uma nova chave para a sua aplicação:
```
./vendor/bin/sail artisan key:generate
```
06 - Editar as variáveis de ambiente (no arquivo .env) para informar as credenciais do banco de dados:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=eureciclo_avaliacaodev_2022
DB_USERNAME=sail
DB_PASSWORD=password
```
07 - Limpar o cache de configurações:
```
./vendor/bin/sail artisan config:cache
```
08 - Rodar as migrations do projeto:
```
./vendor/bin/sail artisan migrate --path=/database/migrations/migrations
```
<br>
Após os passos acima terem sido realizados, você já poderá acessar o projeto através do seu navegador com a URL http://localhost:8080

<b>Nota:</b> se ocorrer algum erro com a sua solicitação, repita os passos <b>07</b> e <b>08</b>.

---

### Funcionalidades Desenvolvidas

- Listagem de Arquivos;
- Upload de Arquivos;
- Validação dos Arquivos carregados;
- Registro de Vendas;
- Validação do conteúdo dos Arquivos carregados;
- Listagem de Vendas;
- Exibição do Faturamento Bruto dos registros importados.

---

### Outras características do projeto
Um serviço para o PHPMyAdmin foi adicionado no arquivo de composição de containers do projeto (docker-compose.yml). Basta acessar [http://localhost:8080/](http://localhost:8080/) e informar o usuário e senha que foram configurados no arquivo .env (usuário: sail | senha: password).

Além das camadas Controller e Model, o projeto conta com as seguintes camadas adicionais:
- <b>Service:</b> lida com a lógica de negócios referente às funcionalidades da aplicação;
- <b>Repository</b>: busca abstrair a camada de persistência de dados
da aplicação (junto a classes mais específicas e relacionadas aos modelos
que a consomem). Além disso, esta camada abstrai a utilização de ORMs e possibilita mudanças de frameworks.

Foi criada um FormRequest para arquivos (app/Http/Requests/FileRequest.php) para encapsular a validação de arquivos.

Foi criada uma Trait para arquivos (app/Traits/FileTrait.php) para validar o conteúdo dos arquivos importados. Essa trait realiza a validação de todas as linhas do arquivo carregado.

---

### Deficiências do Projeto
- Testes precisam ser implementados;
- Realizar as operações que envolvam o banco de dados através de Transactions;
- Gerar mensagens mais informativas para erros/alertas.

---

### :red_circle: :red_circle: E por último... :red_circle: :red_circle:

Foi muito legal desenvolver este desafio. Espero ter a oportunidade de fazer parte da <b>Eu Reciclo</b> em breve.

Até logo o/

---

---

# Sobre o Desafio
A idéia deste desafio é nos permitir avaliar melhor as habilidades de candidatos à vagas de dev remoto, de vários níveis.

Este desafio deve ser feito por você, no máximo em uma semana, porém normalmente você não deve precisar de mais do que algumas horas.

### Atenção
Também serão aceitos projetos já desenvolvidos, de autoria própria, que atendam os critérios listados na seção `Avaliação`. Se esse for o caso, basta enviar o ZIP do projeto para o email vagas@eureciclo.com.br com o título *Desafio de programação*

## Instruções de entrega
1. Crie seu app e inicialize um repositório git.
2. Faça commits (e pushs) conforme for terminando features.
3. Crie instruções de execução da aplicação via Docker em seu README.md.
4. Por fim, envie o link do seu repositorio para avaliarmos.


## Descrição do projeto
Você recebeu um arquivo de texto com os dados de vendas da empresa. Precisamos criar uma maneira para que estes dados sejam importados para um banco de dados.

Sua tarefa é criar uma interface web que aceite upload de arquivos, normalize os dados e armazene-os no banco de dados.

Sua aplicação web DEVE:

1. Aceitar (via formulário) o upload de arquivos text, com dados separados por TAB. A primeira linha do arquivo tem o nome das colunas. Você pode assumir que as colunas estarão sempre nesta ordem e sempre haverá uma linha de cabeçalho. Um arquivo de exemplo chamado 'dados.txt' está incluído neste repositório.
2. Interpretar ("parsear") o arquivo recebido, normalizar os dados, e salvar corretamente a informação em um banco de dados relacional.
3. Exibir todos os registros importados, bem como a receita bruta total dos registros contidos no arquivo enviado após o upload + parser.
4. A aplicação deve ser escrita obrigatoriamente em: Python 3.7+ ou PHP 7+ (dependendo da vaga que está se candidatando), utilizando qualquer framework de preferência.
5. Executar via Docker ou Docker Compose.
6. Utilizar apenas linguagens e bibliotecas livres ou gratuitas.
6. Ter testes de model e controller automatizados.
7. Ter uma boa aparência e ser fácil de usar.


## Avaliação
Seu projeto será avaliado de acordo com os seguintes critérios.

1. Sua aplicação atende funcionalmente o que foi pedido.
2. 100% de cobertura de testes em models e controllers.
3. Você documentou a maneira de rodar sua aplicação via Docker no README.md do projeto.
4. Você seguiu as instruções enviadas.
5. Voce segue as boas práticas de programação e entrega para o Cliente.
6. O código escrito é facil de entender e manter.
7. Você se preocupa com o uso do aplicativo pelo Usuário.

Adicionalmente, tentaremos verificar a sua familiarização com as bibliotecas padrões, bem como sua experiência com programação orientada a objetos a partir da estrutura de seu projeto, preocupação com o objetivo da aplicação e do seu uso pelo usuário, suporte e manutenção do código por outros desenvolvdores

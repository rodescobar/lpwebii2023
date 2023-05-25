## Aula01 08/02/2023
- O que é Xampp
- O que é Apache
    - configuração httpd.conf
    - portas

## Aula02 15/02/2023
- O que é Apache
    - configuração httpd.conf
    - hosts virtuais
- O que é PHP
    - configuração php.ini
- MySQL no Xampp

## Carnaval 22/02/2023

## Aula 03 01/03/2023
- Navegação padrão WEB
    - Cliente / Servidor
    - GET / POST

- HTML / CSS / JavaScript
- Conceito MVC

## Aula 04 08/03/2023
- Composer
- Conhecendo o Laravel
    - Conceito de pastas
    - Controller
    - View
    - Model

`composer create-project laravel/laravel <NOME_PROJETO>`

## Aula05 15/03/2023
- Trabalhando com templates em Laravel
- Trabalho "Criando um site institucional"

## Aula06 22/03/2023
- Trabalho "Criando um site institucional"
- Adicionando código jQuery ao template

## Aula07 29/03/2023
- Trabalhando com model Produto 
- Mostrando em tela produtos cadastrado em banco

## Aula08 05/04/2023
- CRUD de produtos
    - Incluir
    - Alterar
    - Excluir

## Aula09 12/04/2023
- Exercício em sala
- CRUD de clientes

## Aula10 19/04/2023
- Avaliação 

## Aula11 26/04/2023
- Adicionar ao Projeto (Aula 08)
    - CRUD de Cidade e Estado
    - Relacionamento de tabelas

## Aula12 03/05/2023
- Finalização de CRUD de cidades com relacionamento
- Aula sobre sessões no PHP

## Aula13 10/05/2023
- Trabalho:
    - Criação de Autenticação e Registro de usuário no Laravel
    - Adição de áreas seguras nos CRUDs já criados
    - **Entrega**: 10/03/2023
    - **Horário**: até às 22/30
    - **Como**: e-mail: rodrigo.escobar@gmail.com
    - **Assunto**: LPWEBII - Auteticação de Usuário
    - **Lembrete**: E-mail sem RA ficará sem nota
- [Projeto](ProjetoLPWEBII.pdf)
- [Drive](https://drive.google.com/drive/folders/14W_iBFXBQop5fVVP6WzGdLx1ubBMTG4_)

## Aula14 17/05/2023
- Projeto (Continuação)
- Entrega do DER
- Aula de git
    - Comandos
    
*Upload*
- Adicionar atualizações locais ou novos arquivos

`git add .`
        
- Finalizar atualizações locais e preparar pacote para versionamento no git
    
`git commit -m "Comentarios"`
        
- Subir atualizações para o git
    
`git push`

*Download*

- Buscar atualizações mais recentes no repositório e download destes
    
`git pull`


## Aula15 24/05/2023
- Apenas desenvolvimento dos alunos

## Aula16 31/05/2023
- Entrega do esboço da área administrativa.
    - já com a parte de segurança criada
e pelo menos 2 CRUDs

## JunITE 07/06/2023

## Aula17 14/06/2023
- Entrega final
- Apresentação de 5 grupos

## Aula18 21/06/2023
- Apresentação de 5 grupos restantes
- Assinatura de lista de presença (avaliação)


### Variáveis de sessão no Laravel
- *Adicionar item*

`session()->put('NOME', 'VALOR')`

Onde:

    -Nome: nome da variável de sessão

    -Valor: qualquer valor que será armazenado, array, string, numero, classe


- *Resgatar item*

`session()->get('NOME')`

- *Verificar se sessão existe*

`session()->has('NOME')`
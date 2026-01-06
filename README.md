# App Super Gestão

Sistema web desenvolvido com **Laravel**, utilizando **Laravel Sail (Docker)** para padronização do ambiente de desenvolvimento e **Vite** para build de assets front-end.

---

## 🚀 Tecnologias utilizadas

- PHP 8.x
- Laravel
- Laravel Sail (Docker)
- MySQL / MariaDB (via container)
- Node.js + NPM
- Vite
- Composer

---

## 📦 Requisitos

Antes de iniciar, certifique-se de ter instalado:

- Docker
- Docker Compose
- Git

> ❗ **Não é necessário instalar PHP ou Composer localmente**, tudo roda via Docker (Sail).

---

## ⚙️ Instalação do projeto

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/SEU_USUARIO/app-super-gestao.git
cd app-super-gestao

2️⃣ Criar o arquivo de ambiente

cp .env.example .env

3️⃣ Instalar dependências PHP (Composer via Docker)

docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php82-composer:latest \
  composer install

4️⃣ Subir os containers com Sail

./vendor/bin/sail up -d

5️⃣ Gerar a chave da aplicação

./vendor/bin/sail artisan key:generate

6️⃣ Instalar dependências front-end

./vendor/bin/sail npm install

7️⃣ Rodar o Vite (modo desenvolvimento)

./vendor/bin/sail npm run dev

🌐 Acesso ao sistema

http://localhost

🧪 Rodando testes
./vendor/bin/sail artisan test

🗄️ Banco de dados
./vendor/bin/sail artisan migrate
Para seeders:
./vendor/bin/sail artisan db:seed

🛠️ Comandos úteis
# Subir containers
./vendor/bin/sail up -d

# Parar containers
./vendor/bin/sail down

# Acessar o container
./vendor/bin/sail bash

# Rodar comandos artisan
./vendor/bin/sail artisan migrate

📁 Estrutura do projeto

app/
bootstrap/
config/
database/
public/
resources/
routes/
tests/

🔐 Segurança

Arquivos .env não são versionados

Utilize .env.example como base

Nunca suba credenciais reais no repositório

👨‍💻 Autor

Isaias Batista
Desenvolvedor Web



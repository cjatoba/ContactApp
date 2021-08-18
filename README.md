### Criação do projeto

```
laravel new contactApp
```

### Instalação do livewire via composer

```
composer require livewire/livewire
```

### Criação de componente/view contact-create no Livewire

```php
php artisan make:livewire contact-create
```

## CRUD

### Criar a model e migrations

```php
php artisan make:model Contact -m
```

### Adicionar os campos name, email e phone na migration

```php
 public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }
```

### Criar um banco Sqlite

Na pasta Database criar um arquivo chamado database.sqlite

### Configurar o .env para utilizar o banco Sqlite

```
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=contactapp
# DB_USERNAME=root
# DB_PASSWORD=
```

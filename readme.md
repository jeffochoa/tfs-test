# Intall

1. Cone the repo

```bash
$ git clone https://github.com/jeffochoa/tfs-test.git
```

2. Install the project

```bash
$ composer install
```

3. Crate config file

```bash
$ cp .env.example .env
```

4. Crate key
```bash
$ php artisan key:generate
```

5. Add database credentials

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=products
DB_USERNAME=root
DB_PASSWORD=root
```

6. Run migrations
```bash
$ php artisan migrate
```

7. Run seeds
```bash
$ php artisan db:seed
```


8. Run the app
```bash
$ php artisan serve
```
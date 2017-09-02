# ShareStudy

```
sudo composer install
cp .env.example .env
php artisan key:generate
```

.envのDB_CONNECTIONを
```
DB_CONNECTION=sqlite
```

```
touch database/database.sqlite
php artisan migrate --seed
```
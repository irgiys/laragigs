# Install depedencies
```bash
composer install
```

# Copy the .env.example with the name .env
```bash
cp .env.example .env
```

# Generate key
```bash
php artisan key:generate
```

# Create new DB
```bash
CREATE DATABASE laragigs
```

# Change the .env 
```bash
# DB configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laragigs # here  
DB_USERNAME=root 
DB_PASSWORD=
```

# Run the migration
```bash
php artisan migrate:refresh --seed
```

# Run the app 
```bash
php artisan serve
```





# Installation

## Step 1:

Clone this repo and run on this folder

## Step 2:

```bash
cp .env.example .env
```

## Step 3: Edit the .env file

Create new database in your local database system end edit in .env

DB_DATABASE='your_db_name'	

DB_USERNAME='your_db_username'

DB_PASSWORD='your_db_password' 


## Step 4: Composer install

```bash
composer install 
```

If something wrong:
```bash
composer update
```

## Step 5: Migration

```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

## Step 6: Run
```bash
php artisan serve
```
##
Run localhost:8000 in your browser

Kopcaber

clone dulu

stepnya :
1. buka .env.example
2. rename jadi .env
3. 

DB_CONNECTION=mysql -> diganti pake database masing2
DB_HOST=127.0.0.1
DB_PORT=3306 -> diganti portnya sesuai database yang dipake
DB_DATABASE=laravel -> namanya diganti sesuai nama database masing2
DB_USERNAME=root -> username db
DB_PASSWORD= -> password db

4. run di terminal composer update
5. php artisan migrate
6. php artisan serve (buat buka websitenya)

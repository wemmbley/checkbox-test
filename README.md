# Install

- make build
- make up
- make shell
- composer install
- php artisan migrate
- php artisan db:seed

URL – http://localhost:11000

# Routes
- GET /api/book – get list of books
- GET /api/book/1 – get single book by id
- PUT /api/book/edit/1 – edit book by id
- GET /api/book/search/keywords – search book by name
- POST /api/book – create book
- ---
- GET /api/author – get list of authors
- POST /api/author – create author
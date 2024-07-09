# ECommerce API

This is a Laravel-based CRUD API for managing products in an eCommerce shopping website.

## Technologies Used
- PHP
- MySQL
- Laravel
- Git

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/ecommerce-api.git
   cd ecommerce-api
2. Install dependencies:
    ```bash
   composer install
4. Set up the environment variables by copying the `.env.example` to `.env` and updating the database configuration.
   
6. Run the migrations:
    ```bash
   php artisan migrate
7. Start the development server:
    ```bash
   php artisan serve
   
## API Endpoints

Use tools like Postman or curl to test your API endpoints:

* List all products: `GET /api/products`
* Create a new product: `POST /api/products`
* Show a product: `GET /api/products/{id}`
* Update a product: `PUT /api/products/{id}`
* Delete a product: `DELETE /api/products/{id}`

## Example Requests
* Create Product:
  
 ` POST /api/products`
 ```bash
{
    "name": "Sample Product",
    "description": "This is a sample product.",
    "price": 99.99,
    "quantity": 10

}

* Update Product:
 
 ` PUT /api/products/1`
```bash
 {
    "name": "Updated Product",
    "description": "This is an updated product.",
    "price": 79.99,
    "quantity": 5
}




   


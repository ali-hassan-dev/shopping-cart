# Shopping Cart

A simple shopping cart where users can add products to the cart. Users can then view their cart and update it. 

## Table of Contents

1. [Running Locally](#running-locally)
1. [Tech Stack](#tech-stack)

## Running Locally

1. Clone this repo
1. `cd jobs-app`
1. `composer install`
1. `cp .env.example .env`
1. Add your local database credentials in the .env file
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan storage:link`
1. `php artisan serve`

## Tech Stack

1. Laravel
1. Alpine.js
1. Tailwind
1. MySQL

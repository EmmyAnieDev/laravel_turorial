-   To run our code on the web browser, we run "php artisan serve" on our terminal in our project directory

-   Blade is a Template engine which makes it eaasier to work with data and logic inside the view than regular PHP does.

-   When a user types a URL and hits "Send," the web browser sends a request to the server hosting the website. The server passes this request to a route file, which examines the requested URL and determines the appropriate action. This action could involve processing data, saving it to a database, retrieving data, or injecting data into a view. The server then sends the response back to the user, allowing them to see the processed information in their web browser.

-   When passind data to the view, we add a second argument to the VIEW function which the data we want to pass to the view.

-   Query Parameters are ways we can add/inject values or variables into our URL.

-   Route Parameters also known as Wildcards in Laravel. They are part of the URL structure and don't use a variable name.

-   Controller is a class that handles incoming HTTP requests and returns responses. It acts as an intermediary between the application's models, views, and logic.

-   We use one controller for a specific group of route, which contain numerous function for that group of route.

-   To create a Controller we run "php artisan make:controller ControllerName (PizzaController)".

-   Migrations: This is creating tables in the Database.

-   To create a migration file, we run "php artisan make:migration create_table_name (create_pizzas_table)".

-   To run a migration, we run "php artisan migrate". this looks at all our migration and try to migrate all of them by runing the "up" function in each one of them.

-   To check status of our migration, we run "php artisan migration:status".

-   To rollback last migration, we run "php artisan migration:rollback".

-   To add a new column to an exisiting table in the database, we run "php artisan make:migration add_columnName_to_tableName_table (add_price_to_pizzas_table)". This command will add the "price" to the existing "pizzas" table. then we run "php artisan migrate" to add it to the table in the database.

-   Model is a class or an object blueprint that represent a certain type of data.

-   To create an Eloquent Model for the table "pizzas", we run "php artisan make:model Pizza"

-   In MySQL we can't store an Array as a data type but we can store JSON strig that can represet an Array.

-   Attribute casting in Laravel is a feature that allows you to automatically convert model attributes to a specific data type when they are accessed or saved.

-   SAAS: This is a stylesheet language that allows us to do a number of things that regular CSS can't do like Functions and nested rules.

-   Browser can't understannd SAAS in it raw form, so we don't add it to our "Public" directory.

-   To be able to use the SAAS we need to istall a package called "vite" by running "npm install", then "npm add -D sass", then "npm run dev"

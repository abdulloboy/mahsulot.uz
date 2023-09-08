## About Mahsulot.uz

- Demo user with admin role
- login: admin@example.com 
- password: password

- Demo user with user role
- login: user@example.com
- password: password

# Configuration

In .env file add this environment configuration
VAT=0.2

# Run Tests

php artisan test 

## Test assignment PHP/Laravel 

# Prerequisites:

- It is allowed to use online resources. Framework and libraries usage is allowed if the license rules allow to do so 
- The system development technologies can be freely chosen based on your experience but based on the interview, the recommendation  would be to develop on Laravel 
- The time to develop the program is 3-4 hours (you may not be able to finish all of the requirements but it is important to prioritize and  finish the key features!) 

# Evaluation criteria:  

- The time spent to finish the program 
- The fulfillment of requirements 
- The algorithm for solving the problem 
- Written code for the program (comments, code style) 

# Functional requirements: 

- Create login form with fields "Username" and "Password" 
    - a. There must be an error notification if any of the parameters are incorrect 
    - b. There must be 2 users with different roles - admin, user 
    - c. Users can be added to the database using a registration functionality or - database seeding scripts 
    - d. If the user has submitted a valid username and password then the system must redirect to the view from point 2. 
- Product management: 
    - a. A HTML table with columns "Item name", "Quantiy", "Price" and data loaded from database table "product" (see point 3)  
    - b. The user with "admin" role must have full CRUD functionality. The input fields in forms must have validation. 
    - c. The user with "user" role must only be able to view the records 
    - d. A extra column "Total price with VAT" which is calculated in backend using formula: (Item amount * Price per item) * (1+VAT), where  VAT value is retrieved from a configuration file 
    - e. A unit test must be created for method which does point 2.d calculation; 
- A Table called "product" must be created in the database using migration scripts and data must be inserted using seeding scripts. For  example: 


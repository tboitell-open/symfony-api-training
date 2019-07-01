# symfony-api-training
A learning project of Symfony 4 which consists of setting up a REST API as well as a data scrapper.

# Database

To run database use the following commands:
`docker run --name mysql \
    -p 3306:3306 \
    -e MYSQL_ROOT_PASSWORD=my-password \
    -e MYSQL_DATABASE=paris-all-green \
    -e MYSQL_USER=tboitell \
    -e MYSQL_PASSWORD=some-user-password \
    -d mysql:5.7`

You can stop the database with:
`docker stop mysql`

Finally, you can remove the database:
`docker remove mysql`

# API Authentification

Before using the API you need to create an account. To register a new user use the following command.
`curl -X POST http://localhost:8000/auth/register -d _username=your_account_name -d _password=your_password`

To get your JWT token use:
`curl -X POST -H "Content-Type: application/json" http://localhost:8080/auth/login_check -d '{"username":"your_account_name","password":"your_password"}'`

And to send your API Request add your token on your HTTP Request:
`curl -H "Authorization: Bearer [YOUR_TOKEN]" http://localhost:8080/api/greenspace`

# Todolist
- Create the post and delete function on the API Controller.
- Create a service to manage your entities relations with Doctrine.
- Write tests on postman.

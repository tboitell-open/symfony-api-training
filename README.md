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

# Todolist
- Create the post and delete function on the API Controller.
- Create a service to manage your entities relations with Doctrine.
- Look about OAuth authentification and JWT tokens.
- Write tests on postman.


# BACKEND URLS 
###### CREATE URL 
> `http://localhost:8080/api/task/index`
> `http://localhost:8080/api/tasks`

###### READ URL 
> `http://localhost:8080/api/task/index`
> `http://localhost:8080/api/task`

###### GET EACH URL 
###### GET a specific task with its ID
> `http://localhost:8080/api/task/{id}`

###### UPDATE(PUT) URL 
> `http://localhost:8080/api/tasks{id}`

###### DELETE URL 
> `http://localhost:8080/api/tasks/{id}`


# FRONTEND URL
###### HOME URL 
> `http://localhost:8081/`
###### ADD TASK URL 
> `http://localhost:8081/add-task`
###### VIEW ALL TASK URL 
> `http://localhost:8081/tasks`
###### UPDATE TASK URL 
> `http://localhost:8081/update-task/1`



# Task Management API Endpoints
Task API Endpoint with a seamless experience


# Requirement
###### > `A Full CRUD API for task`


# Installation

###### Clone the repository to your local directory
> `https://github.com/Huxteen/task-management-app.git`

###### or Download from this google Drive.
> `https://drive.google.com/drive/folders/1qkL9zxXNleXW-mPgq3cKlpiMD9u4HA2D?usp=sharing`

##### If you download it from other source - you just need to navigate into folder directory.


###### Clone the repository command
> `git clone https://github.com/Huxteen/task-management-app.git`

#### Navigate into the project directory 'task-management-app' to start the server
###### this Start the local server at port 8080
> `php yii serve`

### You would likely get an error, so you would need to create a database from your system and call it "task_management" then run the command below.
###### To migrate the table to your local database
> `php yii migrate`
###### Then the command below to Start the local server at port 8080
> `php yii serve`
### NOTE: You would need a Wamp|Xamp| Mamp server to run this application. This enables you create your database and test the application.



### Web Browser
###### Once the local server is started Navigate to your Web browser (Mozilla or Chrome preferred)
###### copy and paste the URL below to check if the app is running or has started
> `http://localhost:8080/`


# HOW TO START THE VUEJS FRONDEND APPLICATION 
###### Inside the project directory "task-management-app" navigate into the "vuejs" directory the type the command below to start the server.
> `npm run serve`
###### The frontend application would start at port 8081 because the backend is alreading running at port 8080.

# FRONTEND URLS
#### HOME
> `http://localhost:8081`
#### ADD TASK
> `http://localhost:8081/add-task`
#### UPDATE TASK  
> `http://localhost:8081/update-task/{id}`



# Next Testing Our Sweet Endpoints


###### To be able to test this API you need a software development tool to enable you test calls to these endpoints. I used POSTMAN( https://www.postman.com/ ) for testing these endpoints and you can get download it from this URL( https://www.postman.com/ ).


## An overview of the API endpoint.

## Requirement 1

# TASK API Endpoint
### GET - get all the TASKS in the database
  > `/api/task`
  ###### URL - You can paste the link below into your web browser to perform this GET request.
  > `http://localhost:8080/api/task`
  

### POST - Post a tasks to the database
  > `/api/task`
  ###### URL
  > `http://localhost:8080/api/task`

### PUT - To update a specific task data
  > `/api/task/{id}`
  ###### URL
  > `http://localhost:8080/api/task/5`


### GET - TO RETRIEVE ALL TASK DATA
  > `/api/task`
  ###### FRONTEND URL
  > `http://localhost:8081/tasks`
  ###### BACKEND URL
  ###### URL - You can paste the link below into your web browser to perform this GET request.
  > `http://localhost:8080/api/task`


### GET - To /retrieve specific task data
  > `/api/task/{id}`
  ###### URL - You can paste the link below into your web browser to perform this GET request.
  > `http://localhost:8080/api/task/5`


### DELETE - To delete a task
  > `/api/task/{id}`
  ###### BACKEND URL
  > `http://localhost:8080/api/task/5`
  




# Thanks


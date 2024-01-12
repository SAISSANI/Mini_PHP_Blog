# Mini Blog using PHP, MySQL, Kubernetes/Minikube, Docker & Git

## Introduction
<br>
</p>Our project consists of two microservices, including a PHP mini-blog and a MySQL database
database, which we deployed on Docker containers and then within a
Kubernetes cluster.
<br><br></p>

## Installation
<br>
We use Docker on Windows, which uses the Linux subsystem on Windows, and
Kubernetes/Minikube installed on Windows.
<br><br></p>

## Steps

### Step 1:
<p>We chose the PHP language to create our first microservice, which will display
blog posts obtained and stored in a MySQL database.
To do this, we create two Dockerfiles, Dockerfile.www (PHP website based on an Apache image) and
Dockerfile.db (MySQL database), which make up our webapp.
<br>
We tag the images we've created, then push them to Docker Hub, and create
two deployment files that will use these same images before importing them into the
Kubernetes cluster.
After creating our 2 services www and db, our cluster and pods are now referenced on the Kubernetes dashboard.</p>

### Step 2:

<p>
Our two services communicate to ensure the interoperability of our app's front-end, which displays blog posts stored on the second service, which contains the MySQL database.
</p>

### Step 3:

<p>
We've created an Ingress nginx which allows you to interface a web address with its IP. This ingress is created from a yml file. Subsequently, configuration steps are applied to the host files on the respective systems to link a particular domain name and IP, and the minikube tunnel so that ingress runs on our local system (Windows).
<br><br>
This allows us to load our container's web page at the URL "projet-info.com" in our browser such as Google Chrome, because we've set the endpoint of our service to the "/" path of ww.projet-info.com
</p>

### Step 4:

<p>
Our database named "php_docker" contains a single table called
"php_docker_table", with 4 fields:</p> 
<br>
  - id (PRIMARY KEY) INT NOT NULL <br>
  - title VARCHAR(255) NOT NULL <br>
  - body TEXT NOT NULL <br>
  - date_created DATE NOT NULL <br>
  <br>
<p>This is operational using MySQL technology, which contains our blog posts displayed by the frontend microservice.</p>

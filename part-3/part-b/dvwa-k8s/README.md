# Creating Kubernetes Cluster for DVWA
## Create Docker Images of the MySQL DB and Webserver
In the root directory, run the following command:
```
$ docker-compose build
```

## Upload to Local Docker Registry
### Get Image ID and Name
Run the following command and take note of the image name (under 'REPOSITORY' the column) and image ID:
```
$ docker images
REPOSITORY      TAG     IMAGE ID        CREATED         SIZE
dvwak8s_website latest  4785ed80f5c4    34 minutes ago  610MB
```

### Tag and Push
Run the following commands and replace the \<image-id> and \<image-name> with their respective values obtained from the [Get Image ID and Name section](#get-image-id-and-name) above.
```
$ docker tag <image-id> localhost:32000/<image-name>:k8s
$ docker push localhost:32000/<image-name>
```
In my case the following commands were run to upload to tag and push:
```
$ docker tag 4785ed80f5c4 localhost:32000/dvwak8s_website:k8s
$ docker push localhost:32000/dvwak8s_website
```

## Deploy Kubernetes Cluster
In the root directory, run the following command to deploy the pods and services:
```
$ make deploy
```
The Makefile target applies each of the .yaml files that specify the pods and services.

## Access DVWA
In the root directory, run the following command and take note of the exposed port:
```
$ make get-webserver
NAME                TYPE            CLUSTER-IP      EXTERNAL-IP PORT(S)
dvwa-php72-service  LoadBalancer    10.152.183.48   <pending>   80:32104/TCP
```

Then navigate to the following url and replace \<PORT> with the exposed port of the dvwa-php72-service:
```
http://localhost:<PORT>
```
In my case the exposed port is 32104, so the following url navigates to the DVWA:
```
http://localhost:32104
```

## Kill Kubernetes Cluster
In the root directory, run the following command to kill the pods and services:
```
$ make kill
```
The Makefile target deletes each of the deployments specified by the .yaml files.

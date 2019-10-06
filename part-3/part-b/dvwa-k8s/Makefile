deploy:
	microk8s.kubectl apply -f webserver.yaml
	microk8s.kubectl apply -f webserver-svc.yaml
	microk8s.kubectl apply -f mysql.yaml
	microk8s.kubectl apply -f mysql-svc.yaml

kill:
	microk8s.kubectl delete -f webserver.yaml
	microk8s.kubectl delete -f webserver-svc.yaml
	microk8s.kubectl delete -f mysql.yaml
	microk8s.kubectl delete -f mysql-svc.yaml

get-pods:
	microk8s.kubectl get pods --all-namespaces

get-dvwa-service:
	microk8s.kubectl get services/dvwa-php72-service --all-namespaces

get-mysql:
	microk8s.kubectl get services/dvwa-mysql8-service

get-webserver:
	microk8s.kubectl get services/dvwa-php72-service

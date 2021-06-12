# observium_docker
docker app monitoring in observium

https://docs.observium.org/unix_agent/

docker_info goes to target host under /lib/observium_agent/local
```
root@observium:~/observium_docker# telnet swarmtest 36602 > /root/out
Connection closed by foreign host.
root@observium:~/observium_docker# grep -A 5 app-docker /root/out 
<<<app-docker>>>
8
2
0
6
50
```

For the other files read the unix_agend doc from observium

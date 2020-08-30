Create local directories:

```
mkdir ~/mysql_data
mkdir ~/pgadmin_data
mkdir ~/timescale_data
```

Start Backend:

```
docker-compose up
```

Access to different tools:

- Apache: http://localhost (port 80)
- phpMyAdmin: http://localhost:8000 user: `root`, passwort: `qwer1234`
- pgAdmin: http://localhost:8080 user: `testuser@gsits.de` password: `qwer1234`

# quickstart-centos
Getting start in Arukas wih CentOS

## Running locally

##### Public key authentication
```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd docker-hub-images/quickstart-centos
$ docker build --no-cache --tag quickstart-centos .
$ docker run -d -e AUTHORIZED_KEY="`cat ~/.ssh/id_rsa.pub`" -P quickstart-centos
```

##### username/password
If you want to use your original password instead of the default one: "root", you can
set the environment variable ROOT_PWD to your specific password when running the container:
```
$ git clone git@github.com:arukasio/docker-hub-images.git
$ cd docker-hub-images/quickstart-centos
$ docker build --no-cache --tag quickstart-centos .
$ docker run -d -e ROOT_PWD="centos" -P quickstart-centos
```
And now you can ssh as root on the container’s IP address  on some port of Docker daemon's host IP address.

## Deploying to Arukas

[Install the Arukas CLI](https://github.com/arukasio/cli),

or If you have docker installed already,

##### Public key authentication
```
$ docker run \
    --rm \
    -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
    -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
    arukasio/arukas run --instances=1 --mem=512 --envs AUTHORIZED_KEY="`cat ~/.ssh/id_rsa.pub`" --ports=22:tcp arukasio/quickstart-centos

```
##### username/password
For demonstration purpose, we’ll create a strong random password in here.
(We strongly recommend your to use a strong password in order to protect your application from crackers and other malicious attacks.)

```
$ YOUR_PWD=$(openssl rand -base64 48)
$ echo $YOUR_PWD
wTfNAWqBH3nQw3UQ8+Iu2wW7wdez+hvajuW4R+SD81xbmBpopT+uEYiBhHbgTpl0
```


```
$ docker run \
    --rm \
    -e ARUKAS_JSON_API_TOKEN=<APIT_TOKEN> \
    -e ARUKAS_JSON_API_SECRET=<SECRET_KEY> \
    arukasio/arukas run --instances=1 --mem=512 --ports=22:tcp arukasio/quickstart-centos -e ROOT_PWD=$YOUR_PWD
```

## License

This project is licensed under the terms of the MIT license.

**Continue with this tutorial [here](https://arukas.io/tutorials/tutorials-centos).**

Arukas CLI
==========

[![Circle CI](https://circleci.com/gh/arukasio/cli.svg?style=shield)](https://circleci.com/gh/arukasio/cli)

The Arukas CLI is used to manage Arukas apps from the command line.
* Arukas Website: [https://arukas.io/](https://arukas.io/en/)
* Arukas CLI: https://github.com/arukasio/cli

## Docker Image Layer

* arukasio/arukas:latest [![](https://badge.imagelayers.io/arukasio/arukas:latest.svg)](https://imagelayers.io/?images=arukasio/arukas:latest 'Get your own badge on imagelayers.io')
* arukasio/arukas:dev [![](https://badge.imagelayers.io/arukasio/arukas:dev.svg)](https://imagelayers.io/?images=arukasio/arukas:dev 'Get your own badge on imagelayers.io')

## QuickStart

**Please note: Replaced by your arukas token and aruaks api secret is
 `YOUR_API_TOKEN` and `YOUR_API_SECRET`**

* Get API key here: https://app.arukas.io/settings/api-keys
* `docker run --rm -e ARUKAS_JSON_API_TOKEN="YOUR_API_TOKEN"
 -e ARUKAS_JSON_API_SECRET="YOUR_API_SECRET" arukasio/arukas`

## Help

```
usage: docker run --rm arukasio/arukas [<flags>] <command> [<args> ...]

A CLI for Arukas Cloud

Flags:
  --help  Show context-sensitive help (also try --help-long and --help-man).

Commands:
  help [<command>...]
    Show help.


  ps [<flags>]
    Show status of containers

    -a, --all    Show all containers (default shows just running)
    -q, --quiet  Only display numeric IDs

  rm <container_id>
    Remove a container


  run --instances=INSTANCES --mem=MEM --ports=PORTS [<flags>] <image>
    Create and run a container. The container must run as a daemon.

        --instances=INSTANCES  Number of instances
        --mem=MEM              Memory size
        --app-name=APP-NAME    The name of the app.
        --name=NAME            The name of contiainer which must be unique
        --cmd=CMD              Command to execute
    -e, --envs=ENVS ...        Set environment variables. -e KEY=VALUE
    -p, --ports=PORTS ...      Publish a container's port(s) to the internet. -p
                               80:tcp

  start <container_id>
    Start one stopped container


  stop <container_id>
    Stop one running container


  version
    Print version information and quit
```


## License

This project is licensed under the terms of the MIT license.

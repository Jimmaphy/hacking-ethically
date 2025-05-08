# Hacking Ethically

During this workshop, you will explore hacking and cyber security through a series of practical excersizes.
Through different server, that can be set-up through Docker, interactive environements can be accessed.
Each environment has their own excersizes to teach you the basics of this beautiful world.

## Preperation

The first step to take is installing Docker.
The options for installation are listed below.
This can be done according to the [getting started guide](https://docs.docker.com/get-started/introduction/get-docker-desktop/).
Follow the examples under `Try it out` in the before mentioned guide, as well as the [Docker Compose guide](https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-docker-compose/). 
Then you are good to go.


### Installation
 
If you use **Microsoft Windows** as your main operating system, two installation methods are available.
The first option is to install [Docker Desktop](https://docs.docker.com/desktop/setup/install/windows-install/) directly on Windows.
This is the easiest method, but comes with a performance penalty.
Docker runs Linux behind the scenes, which handles files differently from Windows.
When installing directly on Windows, the handling of files needs to be translated for everything that happens.

The other option is to install Linux through the [Windows Subsystem for Linux](https://learn.microsoft.com/en-us/windows/wsl/setup/environment).
This pretty much install Linux on top of Windows.
If you think this is complicated, just install docker desktop as mentioned before, it works good enough for this workshop.
Following the provided guide up to, and including, `Update and upgrade packages` provides you with a system ready to go.
Make sure the required software is installed by running the command below.
When ready, you can follow the guide for Linux to complete the installation.


```bash
sudo apt-get install git
```

If you use a **Mac**, the installation guide is more straightforward.
Simply install [Docker Desktop](https://docs.docker.com/desktop/setup/install/mac-install/) and you are done.

It is possible to install [Docker Desktop](https://docs.docker.com/desktop/setup/install/linux/) on **Linux**, this includes everything you need.
If you are like me and prefer to keep to the trusted terminal, you can install [Docker Engine](https://docs.docker.com/engine/install/) without GUI.
Don't forget to run the [post-installation](https://docs.docker.com/engine/install/linux-postinstall/) if you installed Docker Engine.


### Downloading

To use the exercizes, they need to be downloaded to your computer.
This can be done by downloading this repository as a zip file, or by cloning it onto your machine.
No futher setup is required to run the exercizes.


### Running

To run the exercizes, use a terminal host to navigate to the specific exercizes by using `cd`.
Then, run the exercize by running `docker compose up -d`.
This line is futher explained during the exercises.
When you're finished, make sure to stop the current environment before moving on to the next one.
This can be achieved through `docker compose down`.

```bash
# Navigate to the correct folder
cd ./CSS1/

# Start the environment for the exercize
docker compose up -d

# Stop the environment for the exercize
docker compose down
```

### Issues

If at any point, the installation or relevant database becomes corrupted, the original state of the exercize can be restored.
This is done by removing the containers from your system with `docker compose rm`.

```bash
# Make sure that the environment is stopped before removing
docker compose down

# Remove all the containers from the current exercize
docker compose rm
```

### Workshop Things and Rules

During the workshop, special instructions will be provided that are not included in the instruction files.
These instructions cover basic information on the usage of browser development tools,
an overview of JavaScript functions and an overview of SQL statements.
These are but a refresher for those who forgot.

**IMPORTANT RULE:** DO **NOT** LOOK INSIDE ANY FILES PROVIDED TO YOU,
UNLESS TOLD TO. THESE EXERCIZES ARE SIMULATIONS AND THE FILES _WILL_ GIVE YOU THE ANSWER!

The exercizes marked '2' are there for challenge. If you can't figure it out, don't worry.
They will be covered together. After which, the solution to the vulnerability will be discussed.

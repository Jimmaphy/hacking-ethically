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



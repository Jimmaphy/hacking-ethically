# Cross Site Scripting - Exercize 2

The previous exercize was fun, but now it is time to try out some real things that can happen through CSS.
First `start the docker container` and open [localhost](http://localhost:80/).

```bash
docker compose up -d

# docker:  the application we are using
# compose: the command used
# up:      the subcommand, to launch a compose project
# -d:      [optional] hides all the docker messages and doesn't lock the terminal
```

Now, the website has long term storage through the use of a database.
So what is the issue with this?
Instead of having a piece of code run once, now a piece of code can be ran everytime the site opens.

1. Make an alert box appear like in the previous exercize, observe what happens when you reload the page.
2. [Broken] Write `CSS` in the text box and then automatically click the submit button.

_Make a simulation of the self retweeting tweet, but you need to change how the site works first lmao, now it's just an endless loop :rofl:_

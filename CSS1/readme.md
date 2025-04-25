# Cross Site Scripting - Exercize 1

Welcome to the first exercize on cross site scripting.
This instruction will teach you the basics of this vulnerability.
First `start the docker container` and open [localhost](http://localhost:80/).

```bash
docker compose up -d

# docker:  the application we are using
# compose: the command used
# up:      the subcommand, to launch a compose project
# -d:      [optional] hides all the docker messages and doesn't lock the terminal
```

This will open up a absolutely beautiful website, that allows one to enter a message.
This message is then displayed back to the user. Nothing bad right?
**Wrong!**. The application is vulnerable to something known as `Cross Site Scripting`.
So what is this CSS? And no, it's not a stylesheet :P.

CSS is an issue that happens when text printed to a (web) document, is no longer treated as text.
Instead, the text is treated as code. Let's start with a basic example.
In the textbox on the site, enter the message `Hello World`.
The site functions as expected.

Now, type `<i>Hello</i> <b>World</b>`. Instead of showing the text as entered, the website processes the HTML.
The **World** received a _Hello_. One might say, whatever, the styling can be changed, big deal.
It is a big deal, since HTML offers a beautiful thing: `<script></script>`.

JavaScript, as everyone here should know, is a programming language for the web.
If you don't know this, go ask for your money back. Just kidding.
To exploit this, all that is needed is a script-tag, and the browser will happely execute the code inside.
Try this by entering `<script>window.alert('CSS')</script>` into the message box.
Annoying right, so what are some things one could do here?
Perform the following exercizes and confirm your solution with the answer files.

1. Try and select the submit button through JavaScript, and change the text.
2. Select the textbox and change it's value.
3. Perform task 2, then automatically click the submit button.
4. Make the submit button navigate to a different page.

When you are done with the exercizes. Make sure that the docker container is closed.
This should be done through the command `docker compose down`. 
You know, instead of up, it goes down.

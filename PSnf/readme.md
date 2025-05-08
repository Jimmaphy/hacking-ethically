# Port Sniffing

IP adresses are often compared to actual adresses.
However, an adress has multiple pieces of information.
To extend the analogy, let's introduce some more parts.

- IXPs (Internet Exchange Points) are hubs that connect different countries together. Kinda like a country.
- ISPs (Internet Service Providers) provide internet services to individuals and businesses. Kinda like a city.
- IP Addresses (Internet Protocol Addresses) are part of a single plan taken by individuals and businesses. Kinda like a street.
- MAC Addresses (Media Access Control Addresses) identify a single device. Kinda like a house number.
- Ports identify a single contact point for a device. Kinda like a person.

Let's take a look at an example of this.
Imagine that I would order something at the address of HZ.
In the example, every single entry is mapped to the corresponding service point.

- Jimmaphy (Port)
- Groene Woud 1A (IP Address + MAC Address)
- Middelburg (ISP)
- The Netherlands (IXP)

Changing the information to service points, would resolve in the following.
This information is used whenever a browser requests the HZ website.
Assuming that the website runs on the default HTTPS port.
If Jimmaphy is not living at the address above, the package can't be delivered.
If there is no service hosted on the address below, a request can't be processed.

- 443
- 145.19.1.145 AA:BB:CC:DD:EE:FF
- KPN
- AMS-IXP

## Ports in action

It is possible show the effect of different ports through the HZ website. 
For example, when using [www.hz.nl](www.hz.nl), the website is loaded.
HTTPS is automatically selected as preffered protocol.
However, it is still possible to access the HTTP version of the website.
This can be done by directly navigating to port 80 through [http://145.19.1.145:80](http://145.19.1.145:80).
However, there may be different ports available to access.

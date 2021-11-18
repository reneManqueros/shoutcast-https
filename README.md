# Shoutcast HTTPS proxy

A PHP proxy that you can run on an HTTPS enable server to compensate for the fact that Shoutcast does NOT support HTTPS on all service tiers.

## Features

- It works !
- One file, one line to configure
- Works on any PHP hosting as long as it supports fopen

## Usage / Installation

- Place "shoutcast.php" on your server, you can rename it if needed.
- Replace the value of $URL with your shoutcast server.
- Point your clients to the proxy file (e.g. site.com/shoutcast.php)

## License
It's 20 lines, I don't care ...
# Escape Game

A real-time multiplayer Escape Game built using **Express** and **Socket.io**.

## Installation

Make sure you have [Node.js](https://nodejs.org/) installed on your machine.

Install the required packages:

```bash
npm install express
npm install socket.io
```

## Start the App

Run the server with:

```bash
node server.js
```

The game will be available at:

```
http://localhost:3000
```

## Project Structure

```
.
├── server.js          # Main server file
├── package.json
└── public/            # Static files (HTML, CSS, JS)
```

## Description

This project sets up a basic real-time server for an interactive escape game. Players can connect simultaneously and interact through WebSockets. All game logic can be customized inside `server.js` and client-side scripts located in the `public/` directory.

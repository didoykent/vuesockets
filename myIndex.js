var app = require('express');

var server = require('http').Server(app);

var io = require('socket.io')(server);


var redis = require('redis');


server.listen(8890);


io.on('connection', function(socket){

  console.log('Client connected');

var redisClient = redis.createClient();


redisClient.subscribe('message');



redisClient.on('message', function(channel, message){

  console.log('myEvent' + channel + message);

  socket.emit(channel, message);

});



redisClient.on('disconnect', function(){

redisClient.quit();
});

socket.on('new message', function(message){

  console.log("myMessage" + message);
});

socket.on('latestMessage', function(lastestmessage){

  socket.emit('sendMessage', lastestmessage)
});

  socket.on('disconnect', function(){

    console.log('Client disconnected');
  });

});

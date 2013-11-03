mServerIP   = process.argv[2];
mServerPort = process.argv[3];
mListenPort = process.argv[4];
mMainFile   = process.argv[5];
mServerBind = process.argv[6];
/*
process.argv.forEach(function (val, index, array) {
  console.log(index + ': ' + val);
});
*/
//new
var express = require('express')
//, routes = require('./routes')
, http = require('http');
 
var app = express();
var serverDude = app.listen(mListenPort);
var io = require('socket.io').listen(serverDude);
 
//app.configure(function(){
//;app.set('views', __dirname + '/views');
//app.set('view engine', 'jade');
//app.use(express.favicon());
//app.use(express.logger('dev'));
//app.use(express.static(__dirname + '/public'));
//app.use(express.bodyParser());
//app.use(express.methodOverride());
//app.use(app.router);
//});
 
//app.configure('development', function(){
//app.use(express.errorHandler());
//});
 
//app.get('/', routes.index);
 
//console.log("Express server listening on port 3000");

//old
//var app = require('express').createServer()
//var io = require('socket.io').listen(app);
io.set('log level', 1); //reduce logging
var dgram = require("dgram");
var server = dgram.createSocket("udp4");

var mMessage = 0;

var mClientIDCounter = 0;

var skipCounter = 0; 
var fireNumber = 0; //no skipping of frames

//constants
mCommandOriginX      = 1;
mCommandOriginY      = 2;
mCommandOriginZ      = 4;
mCommandRotationX    = 8;
mCommandRotationZ    = 16;
mCommandScore        = 32;
mCommandBattle       = 64;

//app.listen(mListenPort);

// routing
app.get('/', function (req, res) {
  res.sendfile(__dirname + '/' + mMainFile);
});


//when a browser client first connects, this get's called.
//then we parlay that into a send to the c++ server
//could i not just assign an id here and then pass that to c++ as it's just going to be a browser id and no one else will use it.


//you could send username and password with sendConnect......
//if you are trying to login and you already have a client associated with username than
//you can just authenticate on server. other wise give them a new client.
//if ( 
///
/*
loop clients
if
	username
		then if password
			then reconnect...
else
	createClient
		check username and password combo
			if good
				then login 
			else bad
				then delete client and user can try again to send a connect.   
*/

io.sockets.on('connection', function (socket) 
{
	console.log('io.sockets.on,socket.id:' + socket.id);
        socket.on('send_connect', function(message,remote)
        {
		socket.join('game1');
                mMessage = message;
               
		mess = parseInt(mMessage);
 
                //send to c++ server
                var buf = new Buffer(2);
                buf.writeInt8(mess,0);

		mClientIDCounter++;
		socket.mClientID = mClientIDCounter;
                
		buf.writeInt8(socket.mClientID,1);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });
        });

	socket.on('disconnect', function ()
	{
                //send to c++ server
                var buf = new Buffer(2);

                //type
                type = -112;
                buf.writeInt8(type,0);

                //mClientID
                buf.writeInt8(socket.mClientID,1);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });

        });

        socket.on('send_disconnect', function(message,remote)
        {
		//send to c++ server
                var buf = new Buffer(2);

                //type
                type = -112;
                buf.writeInt8(type,0);

                //mClientID
                buf.writeInt8(socket.mClientID,1);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });
        });

        socket.on('send_join_game', function(message,remote)
	{
                mMessage = message;

		var gameID = mMessage;	               

                //send to c++ server
                var buf = new Buffer(3);

		//type
                type = -117;
                buf.writeInt8(type,0);

		//mClientID
                buf.writeInt8(socket.mClientID,1);

		//gameID
                buf.writeInt8(gameID,2);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });
        });

        socket.on('send_leave_game', function(message,remote)
	{
		//console.log('received send_leave_game..');		
                //send to c++ server
                var buf = new Buffer(2);

		//type
                type = -45;
                buf.writeInt8(type,0);

		//mClientID
                buf.writeInt8(socket.mClientID,1);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });

        });

        socket.on('send_move', function(message,remote)
        {
                mMessage = message;
		var messageArray = message.split(" ");

		var currentKey = parseInt(messageArray[1]);	               
		type = 2;

                //send to c++ server
                var buf = new Buffer(3);
                buf.writeInt8(type,0);
                buf.writeInt8(socket.mClientID,1);
                buf.writeInt8(currentKey,2);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });
        });


        socket.on('send_answer', function(message,remote)
	{
		var messageLength = message.length;
		var blankSpot = 0;	
		var messageArray = message.split(" ");
	
		//send to c++
                var bufLength = parseInt(messageLength + 3); // -1 for blank +1 for short and +1 for mClientID +1 for size 
                var buf = new Buffer(bufLength);

                //type
                type = -85;
                buf.writeInt8(type,0);

		//mClientID
                buf.writeInt8(socket.mClientID,1);

		//answerTime
		buf.writeInt16LE(messageArray[0],2);	
		
		//answerLenght and answer 
		var answer = messageArray[1];
		var answerLength = answer.length;
                buf.writeInt8(answerLength,4);
		for (i = 0; i < answerLength; i++)
		{
  			buf.writeInt8(answer[i].charCodeAt(0),parseInt(i + 5));
		}


                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
		{

                });
        });

        socket.on('send_logout', function(message,remote)
	{
         	//send to c++ server
                var buf = new Buffer(2);

                //type
                type = -98;
                buf.writeInt8(type,0);

                //mClientID
                buf.writeInt8(socket.mClientID,1);

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });
        });
	
        socket.on('send_login', function(message,remote)
        {
		var messageLength = message.length;
		var blankSpot = 0;	
	
		for (i = 0; i < messageLength; i++)
		{
			if (message[i] == ' ')	
			{
				blankSpot = i;
			}
		}
		//send to c++
		//buf
                var bufLength = parseInt(3 + messageLength); // 4 items minus blankspot + messageLength
                var buf = new Buffer(bufLength);

		//type
                type = -125;
		buf.writeInt8(type,0);

		//mClientID
                buf.writeInt8(socket.mClientID,1);

		//usernameLength
		var usernameLength = parseInt(blankSpot);
                buf.writeInt8(usernameLength,2);

		//passwordLength
		var passwordLength = parseInt(messageLength - blankSpot - 1);
                buf.writeInt8(passwordLength,3);


		for (u = 0; u < usernameLength; u++)
		{
  			buf.writeInt8(message[u].charCodeAt(0),parseInt(u + 4));
		}

		for (p = 0; p < passwordLength; p++)
		{
  			buf.writeInt8(message[parseInt(p + blankSpot + 1)].charCodeAt(0),parseInt(usernameLength + 4 + p));
		}

                server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
                {
                });

		
        });
});

server.on("message", function (msg, rinfo)
{
	//to break out of message when it's over
	var length = msg.length;
	var count = 0;

        var type   = msg.readInt8(0);
	count++
       
        //add shape
	//this is getting called 2 times for some reason
        if (type == -103)
        { 
                var clientID = msg.readInt8(1);
                var client   = msg.readInt8(2);
                var index    = msg.readInt16LE(3);
                var xpos     = msg.readFloatLE(5);
                var ypos     = msg.readFloatLE(9);
                var zpos     = msg.readFloatLE(13);
                var xrot     = msg.readFloatLE(17);
                var zrot     = msg.readFloatLE(21);
                var mesh     = msg.readInt8(25);
                var anim     = msg.readInt8(26);

  		var length = msg.readInt8(27);

                string = "" + length + ",";

                for (i = 0; i < length; i++)
                {
                        var n = msg.readInt8(parseInt(28 + i));
                        var c = String.fromCharCode(n);
                        string = string + c;
                }

                //let's just pass off data msg to browsers
		var addShapeString = type;

                addShapeString = addShapeString + "," + client + "," + index + "," + xpos + "," + ypos + "," + zpos + "," + xrot + "," + zrot + "," + mesh + "," + anim + "," + string; 
//-103,0,50,1936,0,35,0,1,1,1,0
		io.sockets.clients().forEach(function (socket)
		{
			if (socket.mClientID == clientID)
			{
       				socket.emit('news', addShapeString)
			} 
		});
        }

	//mMessageAskQuestion
 	if (type == -76)
        {
                var clientID = msg.readInt8(1);
  		var length   = msg.readInt8(2);
                
                var questionString = '';
		for (i = 0; i < length; i++)
                {
                        var n = msg.readInt8(parseInt(3 + i));
                        var c = String.fromCharCode(n);
                        questionString = questionString + c;
                }

		var string = type + "," + questionString;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
	}
    
	//mMessageCorrectAnswerStart
/*
        if (type == -61)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }
*/	
	//mMessageShowCorrectAnswerStart
        if (type == -61)
        {
                var clientID = msg.readInt8(1);
                var length   = msg.readInt8(2);

                var questionString = '';
                for (i = 0; i < length; i++)
                {
                        var n = msg.readInt8(parseInt(3 + i));
                        var c = String.fromCharCode(n);
                        questionString = questionString + c;
                }

                var string = type + "," + questionString;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }

	//mMessageCorrectAnswerEnd
        if (type == -63)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }
	
	//mMessageStandings
        if (type == -94)
        {
                //var clientID = msg.readInt8(1);
                var length   = msg.readInt8(1);

                var standingsString = '';
                for (i = 0; i < length; i++)
                {
                        var n = msg.readInt8(parseInt(2 + i));
                        var c = String.fromCharCode(n);
                        standingsString = standingsString + c;
                }

                var string = type + "," + standingsString;
		console.log('standings:' + string);

                io.sockets.clients().forEach(function (socket)
                {
			if (socket.mClientID > 0)
                        //if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }

	//mMessageBattleStart
 	if (type == -75)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
	}

	//mMessageBattleEnd
 	if (type == -74)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
	}

 	//mMessageGameResetStart
        if (type == -57)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }
 	
	//mMessageGameResetEnd
        if (type == -58)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }

	//mMessageConnected
 	if (type == -90)
        {
                var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
	}

	//mMessageSetText
	if (type == -66)
	{
		var index    = msg.readInt16LE(1);

                var length   = msg.readInt8(3);

                var setTextString = '';
                for (i = 0; i < length; i++)
                {
                        var n = msg.readInt8(parseInt(4 + i));
                        var c = String.fromCharCode(n);
                        setTextString = setTextString + c;
                }

                var string = type + "," + index + "," + length + "," + setTextString;

		io.sockets.clients().forEach(function (socket)
                {
                	if (socket.mClientID > 0)
                        {
                                socket.emit('news', string)
                        }
                });
	} 

	//logout	
        if (type == -114)
	{
 		var clientID = msg.readInt8(1);
                var string = type;
                string = string + "," + clientID;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
	}

        if (type == -113)
	{
                var clientID = msg.readInt8(1);
		var loginString = type;
		loginString = loginString + "," + clientID; 

		io.sockets.clients().forEach(function (socket)
		{
			if (socket.mClientID == clientID)
			{
       				socket.emit('news', loginString)
			} 
		});
	}

	//mMessageRemoveShape
	if (type == -104)
	{
 		var clientID = msg.readInt8(1);
 		var index    = msg.readInt8(2);
                var removeShapeString = type;
                removeShapeString = removeShapeString + "," + clientID + "," + index;

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', removeShapeString)
                        }
                });
	}

	//mMessageAddSchool
        if (type == -109)
        {
                var clientID = msg.readInt8(1);
                var length = msg.readInt8(2);

                var string = type;
		string = string + "," + length;

 		for (i = 0; i < length; i++)
                {
			var n = msg.readInt8(parseInt(3 + i));	
			var c = String.fromCharCode(n);
			string = string + "," + c;	
                }

                io.sockets.clients().forEach(function (socket)
                {
                        if (socket.mClientID == clientID)
                        {
                                socket.emit('news', string)
                        }
                });
        }

        if (type == -99)
	{
                var clientID = msg.readInt8(1);
		var string = type;
		string = string + "," + clientID; 

		io.sockets.clients().forEach(function (socket)
		{
			if (socket.mClientID == clientID)
			{
       				socket.emit('news', string)
			} 
		});
	}
	
	if (type == 1)
	{
		skipCounter++;
	
		var dataString = type;
	
		//sequence
        	dataString = dataString + "," + msg.readUInt16LE(count);
		count = count + 2;

		if (skipCounter > fireNumber)
		{

			//frametime			
			dataString = dataString + "," + msg.readInt8(count);
			count++;
	
			while(count < length)
			{
				var flags = 0;

        			moveXChanged = true;
        			moveYChanged = true;
        			moveZChanged = true;
		
				//index(id)	
				dataString = dataString + "," +  msg.readInt8(count);
				count++;
	
				//flag	
				flags = msg.readInt8(count);
				dataString = dataString + "," + flags;
				count++;

        			// Origin
        			if(flags & mCommandOriginX)
        			{
        				dataString = dataString + "," + msg.readFloatLE(count);
					count = count + 4;
        			}
        			else
        			{
                			moveXChanged = false;
        			}

        			if(flags & mCommandOriginY)
        			{
        				dataString = dataString + "," + msg.readFloatLE(count);
					count = count + 4;
				}
        			else
        			{
                			moveYChanged = false;
        			}

        			if(flags & mCommandOriginZ)
        			{
        				dataString = dataString + "," + msg.readFloatLE(count);
					count = count + 4;
        			}
        			else
        			{
                			moveZChanged = false;
        			}

        			//rotation
        			if(flags & mCommandRotationX)
        			{
        				dataString = dataString + "," + msg.readFloatLE(count);
					count = count + 4;
        			}

        			if(flags & mCommandRotationZ)
        			{
        				dataString = dataString + "," + msg.readFloatLE(count);
					count = count + 4;
        			}

				if (flags & mCommandScore)
				{
					console.log("mCommandScore flag set in udp.js");	
        				dataString = dataString + "," + msg.readInt8(count);
					count++;
				}	
				
				if (flags & mCommandBattle)
				{
					console.log("mCommandBattle flag set in udp.js");	
        				dataString = dataString + "," + msg.readInt8(count);
					count++;
				}	
	
			} //  end while count < length
		
		       	io.sockets.clients().forEach(function (socket)
                        {
				if (socket.mClientID > 0)
				{
                       			socket.emit('news', dataString)
				}
                        });

			skipCounter = 0;
		} //end skip check	
	} //if type
});

server.on("listening", function ()
{
        var address = server.address();
 	console.log("server listening " +  address.address + ":" + address.port); 
});

server.bind(mServerBind);

//send initial connection to c++ server
//send to c++ server
var buf = new Buffer(1);
buf.writeInt8(-121,0);
server.send(buf, 0, buf.length, mServerPort, mServerIP, function(err, bytes)
{
	console.log('sent connect from node');
});

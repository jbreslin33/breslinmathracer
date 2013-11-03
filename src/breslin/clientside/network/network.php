var Network = new Class(
{

initialize: function(application,serverIP, serverPort)
{
	//client id
	this.mClientID = 0;

        //application
        this.mApplication = application;

        //server address
        this.mServerIP = serverIP;
        this.mServerPort = serverPort;

        //sequences
        this.mIncomingSequence               = 0;

	this.mSocket = this.open();

	//parse
        this.mIncomingSequence = 0;
        this.mDroppedPackets = 0;
},

log: function(msg)
{
        setTimeout(function()
	{
        	throw new Error(msg);
        }, 0);
},

// this should call ajax function on server to create a socket
open: function()
{
	ip_port = this.mServerIP + ':' + this.mServerPort; 
	this.log('open socket on:' + ip_port);
	return io.connect(ip_port);
},

reopen: function()
{
	ip_port = this.mServerIP + ':' + this.mServerPort; 
	this.log('reopen socket on:' + ip_port);
	return io.connect(ip_port);
},


sendConnect: function()
{
	this.mSocket.emit('send_connect', '-111');
}

});

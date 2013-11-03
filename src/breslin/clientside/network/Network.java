package breslin.clientside.network;

/***************************************
*   		INCLUDES
***************************************/
//standard library
import java.io.*;
import java.net.*;

//nonblocking receive
import java.net.SocketAddress;
import java.net.InetSocketAddress;
import java.nio.channels.DatagramChannel;
import java.io.IOException;
import java.nio.ByteBuffer;
import java.nio.ByteOrder;
import java.nio.CharBuffer;

//game
import breslin.clientside.application.ApplicationBreslin;


//command
import breslin.clientside.command.Command;

/***************************************
*   		FORWARD DECLARATIONS
***************************************/

public class Network
{

public Network(ApplicationBreslin applicationBreslin, byte[] serverIP, int serverPort)
{
	//game
	mApplicationBreslin = applicationBreslin;

	//command
	mCommandToServer     = new Command();
	mLastCommandToServer = new Command();

	//server address
	mServerIP = serverIP;
	mServerPort = serverPort;
	mClientPort = 30003;

	//sequences
	mIncomingSequence		= 0;

	//parse
	mIncomingSequence = 0;
	mDroppedPackets = 0;


	try
	{
		String serverIPString = new String(mServerIP, "UTF8");
		System.out.println("NETWORK CONSTRUCTOR: serverIP:" + serverIPString + " serverPort:" + serverPort);

	}
	catch (UnsupportedEncodingException e)
	{
	    e.printStackTrace();
	}

	//for nonblocking recieve
	try
	{
    	//lets setup one for client and then get the port as this will be used for sending and recieving henceforth and it will
    	//be what port the serverside will think we are using. So we better be listening on it and sending on it! let's bind to it.
    	//we will also make it non-blocking to avoid threading our game loop.
       	mInetSocketAddressClient = new InetSocketAddress(0);
       	mClientPort = mInetSocketAddressClient.getPort();

		//DatagramChannel to be used for send and reviece
	    mDatagramChannel = DatagramChannel.open();
		mDatagramChannel.socket().bind(new InetSocketAddress(mClientPort));
		mDatagramChannel.configureBlocking(false);

		//lets setup a SocketAddress for server so we can send,
		//let's also connect to it so we can avoid overhead of security check

		String mServerIPString = new String(mServerIP, "UTF8");
		mInetSocketAddressServer = new InetSocketAddress(mServerIPString, 30004);
    	mDatagramChannel.connect(mInetSocketAddressServer);

	}
	catch (IOException ioe)
	{
		System.out.println("ERROR in nonblocking socket in network constructor");
	}
System.out.println("end of netsssssssssssssssssssssssssssssssssssss");
}


/***************************************
*   		MEMBER VARIABLES
***************************************/

//ApplicationBreslin
ApplicationBreslin mApplicationBreslin;

//nonblocking recieve
DatagramChannel mDatagramChannel;
InetSocketAddress   mInetSocketAddressClient;
InetSocketAddress   mInetSocketAddressServer;
//DatagramSocket  mDatagramSocket;

//command
public Command mCommandToServer;
public Command mLastCommandToServer;

//server address
byte[] mServerIP;
String mServerIPString;
int mServerPort;
int mClientPort;

//sequences
short mIncomingSequence;		// Incoming packet sequence
short	mDroppedPackets;			// Dropped packets


//graphics
//GraphicsOgre mGraphicsOgre;

/***************************************
*			          METHODS
*
*
*
*
***************************************/

/***************************************
*   		RECIEVE PACKETS
***************************************/



public boolean checkForByteBuffer(ByteBuffer byteBuffer)
{
   try
    {
		if (mDatagramChannel.receive(byteBuffer) != null)
		{

			byteBuffer.position(0);  //this sets marker to beginning of buffer just like BeginReading in c++.

			// Parse system messages
			parsePacket(byteBuffer);
			return true;
		}
		else
		{



			return false;
		}
	}
	catch (Exception ex)
	{
        System.err.println("bres:" + ex);
    }
    return false;
}

void parsePacket(ByteBuffer byteBuffer)
{

	byteBuffer.position(0);

	int type = byteBuffer.get();
	// Check if the type is a positive number
	// = is the packet sequenced
	if(type > 0)
	{
		short sequence		= byteBuffer.getShort();

		if(sequence <= mIncomingSequence)
		{
			System.out.println("Client..Sequence mismatch");

		}
		//mDroppedPackets = sequence - mIncomingSequence + add1;

		mIncomingSequence = sequence;
	}

}

/***************************************
*   		SEND PACKETS
***************************************/




public void reset()
{
    mIncomingSequence                = 0;
}

public void send(ByteBuffer byteBuffer)
{
	try
  	{
      	byteBuffer.position(0);

		mDatagramChannel.write(byteBuffer); //write to channel you are connecting to.
	}
    catch (Exception e)
    {
      	System.err.println(e);
    }


	byteBuffer.position(0);
}

}



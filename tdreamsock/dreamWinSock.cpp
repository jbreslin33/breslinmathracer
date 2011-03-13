/**********************************/
/* Programmers:                   */
/* Teijo Hakala                   */
/**********************************/
// Windows code only

#include "dreamSock.h"
#include <stdio.h>
#include <windows.h>
#include <assert.h>


//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_InitializeWinSock(void)
{
	WORD versionRequested;
	WSADATA wsaData;
	DWORD bufferSize = 0;

	LPWSAPROTOCOL_INFO SelectedProtocol;
	int NumProtocols;

	// Start WinSock2. If it fails, we do not need to call WSACleanup()
	versionRequested = MAKEWORD(2, 0);
	int error = WSAStartup(versionRequested, &wsaData);
    
	if(error)
	{
		LogString("FATAL ERROR: WSAStartup failed (error = %d)", error);
		return 1;
	}
	else
	{
		LogString("WSAStartup OK");

		// Confirm that the WinSock2 DLL supports the exact version
		// we want. If not, call WSACleanup().
		if(LOBYTE(wsaData.wVersion) != 2 || HIBYTE(wsaData.wVersion) != 0)
		{
			LogString("FATAL ERROR: WinSock2 DLL does not support the correct version (%d.%d)",
				LOBYTE(wsaData.wVersion), HIBYTE(wsaData.wVersion));

			WSACleanup();
			return 1;
		}
	}

	// Call WSAEnumProtocols to figure out how big of a buffer we need
	NumProtocols = WSAEnumProtocols(NULL, NULL, &bufferSize);

	if( (NumProtocols != SOCKET_ERROR) && (WSAGetLastError() != WSAENOBUFS) )
	{
		WSACleanup();
		return 1;
	}

	// Allocate a buffer, call WSAEnumProtocols to get an array of
	// WSAPROTOCOL_INFO structs
	SelectedProtocol = (LPWSAPROTOCOL_INFO) malloc(bufferSize);

	if(SelectedProtocol == NULL)
	{
		WSACleanup();
		return 1;
	}

	// Allocate memory for protocol list and define what protocols to look for
	int *protos = (int *) calloc(2, sizeof(int));

	protos[0] = IPPROTO_TCP;
	protos[1] = IPPROTO_UDP;

	NumProtocols = WSAEnumProtocols(protos, SelectedProtocol, &bufferSize);
	
	free(protos);
	protos = NULL;
	
	free(SelectedProtocol);
	SelectedProtocol = NULL;

	if(NumProtocols == SOCKET_ERROR)
	{
		LogString("FATAL ERROR: Didn't find any required protocols");
		WSACleanup();
		return 1;
	}

	return 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_Win_GetCurrentSystemTime(void)
{
	int curtime;
	static int base;
	static bool initialized = false;

	if(!initialized)
	{
		base = timeGetTime() & 0xffff0000;
		initialized = true;
	}

	curtime = timeGetTime() - base;

	return curtime;
}

//#endif

#ifndef DREAMSOCKLOG_H
#define DREAMSOCKLOG_H

/******************************************************
*				INCLUDES
********************************************************/
#ifdef WIN32

/******************************************************
*				FORWARD DECLARATIONS
********************************************************/

/******************************************************
*				CLASS
********************************************************/
class dreamConsole
{
	public:
		dreamConsole(char *title);
		~dreamConsole();
/******************************************************
*				VARIABLES
********************************************************/


/******************************************************
*				METHODS
********************************************************/
void println(char *string, int type, ...);

};

#define CONSOLE_NOTIFY	0
#define CONSOLE_ERROR	1
#define CONSOLE_FATAL	2

// Function prototypes
void StartLogConsole(void);
#endif

// Function prototypes
void StartLog(void);
void StopLog(void);
void LogString(const char *string, ...);

#endif

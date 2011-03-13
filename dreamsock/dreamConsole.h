#ifndef __DREAMCONSOLE_H__
#define __DREAMCONSOLE_H__

#ifdef WIN32

class DreamConsole
{
public:
	DreamConsole(char *title);
	~DreamConsole();
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

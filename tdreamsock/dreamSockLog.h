#ifndef __DREAMSOCKLOG_H__
#define __DREAMSOCKLOG_H__

#ifdef WIN32

class dreamConsole
{
	public:
		dreamConsole(char *title);
		~dreamConsole();
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
void LogString(char *string, ...);

#endif

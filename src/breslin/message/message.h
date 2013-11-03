#ifndef MESSAGE_H
#define MESSAGE_H

class Message
{
private:
	bool			overFlow;
	int				maxSize;
	int				size;
	int				readCount;

	char			*GetNewPoint(int length);

public:
	void			Init(char *d, int length);
	void			Clear(void);
	void			Write(const void *d, int length);

	void			WriteByte(char c);
	void			WriteShort(short c);
	void			WriteLong(long c);
	void			WriteFloat(float c);
	void			WriteString(const char *s);
	void			BeginReading(void);
	void			BeginReading(int s);
	char			*Read(int s);
	char			ReadByte(void);
	short			ReadShort(void);
	long			ReadLong(void);
	float			ReadFloat(void);
	char			*ReadString(void);

	bool			GetOverFlow(void); 
	int				GetSize(void)		{ return size; }
	void			SetSize(int s)		{ size = s; }

	char			*data;
	char			outgoingData[1400];

	int             getReadCount() { return readCount; }
};



#endif

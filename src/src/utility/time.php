var Time = new Class(
{
	initialize: function(hours,minutes)
	{
		this.mHour = hours;
		this.mMinute = this.convertMinute(minutes);
	},
	
	subtract: function(from,till)
	{
		var time = new Time(10,13);
		return time; 
	},
	
	convertMinute: function(minute)
        {
		minute = parseInt(minute);
		var m = 0;
		
		if (minute == 0)
		{
			m = '00';	
		}
		if (minute == 1)
		{
			m = '01';	
		}
		if (minute == 2)
		{
			m = '02';	
		}
		if (minute == 3)
		{
			m = '03';	
		}
		if (minute == 4)
		{
			m = '04';	
		}
		if (minute == 5)
		{
			m = '05';	
		}
		if (minute == 6)
		{
			m = '06';	
		}
		if (minute == 7)
		{
			m = '07';	
		}
		if (minute == 8)
		{
			m = '08';	
		}
		if (minute == 9)
		{
			m = '09';	
		}
		if (minute > 9 && minute < 60)
		{
			m = minute;	
		}
		return m;
	}
});

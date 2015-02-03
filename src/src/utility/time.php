var Time = new Class(
{
	initialize: function(hours,minutes)
	{
		this.mHour = hours;
		this.mMinute = this.convertMinute(minutes);
	},
	
	subtract: function(subtract)
	{
		var minute = parseInt(this.mMinute + subtract.mMinute);
		var hour = parseInt(this.mHour - subtract.mHour);
	
		if (minute > 59)
		{
			minute = parseInt(minute - 60);
			hour--;
		}
	
		var time  = new Time(hour,minute);
		return time; 
	},
	
	add: function(add)
	{
		var minute = parseInt(this.mMinute + add.mMinute);
		var hour = parseInt(this.mHour + add.mHour);
	
		if (minute > 59)
		{
			minute = parseInt(minute - 60);
			hour++;
		}
	
		var time  = new Time(hour,minute);
		return time; 
	},

	getString: function()
	{
		var s = '';
		if (this.mHour < 12)
		{
			s = '' + this.mHour + ':' + this.mMinute + ' A.M.';		
		}
		if (this.mHour == 12)
		{
			s = '' + this.mHour + ':' + this.mMinute + ' P.M.';		
		}
		if (this.mHour > 12)
		{
			s = '' + parseInt(this.mHour - 12) + ':' + this.mMinute + ' P.M.';		
		}
		return s;
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

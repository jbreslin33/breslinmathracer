/* JimPICKER: 
this class will return an item or 0 if you  call getItem(1) and pass a typeid.
*/ 

var PickerJim = new Class(
{

initialize: function(sheet)
{
	this.mSheet = sheet;
},

getItem: function(id)
{
        id = id.replace(/^\s+|\s+$/g,'')

	//k.cc.b.5
	if (id == 'k.cc.b.5_1')
	{
		return new i_k_cc_b_5__1(this.mSheet);
	}
	if (id == 'k.cc.b.5_2')
	{
		return new i_k_cc_b_5__2(this.mSheet);
	}
	if (id == 'k.cc.b.5_3')
	{
		return new i_k_cc_b_5__3(this.mSheet);
	}
	if (id == 'k.cc.b.5_4')
	{
		return new i_k_cc_b_5__4(this.mSheet);
	}

	//k.cc.c.6
	if (id == 'k.cc.c.6_1')
	{
		return new i_k_cc_c_6__1(this.mSheet);
	}
	
	//k.cc.c.7
	if (id == 'k.cc.c.7_1')
	{
		return new i_k_cc_c_7__1(this.mSheet);
	}

	return 0;	
}
		
});

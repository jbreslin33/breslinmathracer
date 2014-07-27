/* PICKERBRIAN: 
this class will return an item or 0 if you  call getItem(1) and pass a typeid.
*/ 

var PickerBrian = new Class(
{

initialize: function(sheet)
{
	this.mSheet = sheet;
},

getItem: function(id)
{
	//4.nbt.a.2
	if (id == '4.nbt.a.2_1')
	{
		return new i_4_nbt_a_2__1(this.mSheet);
	}

	//4.nbt.a.2
	if (id == '4.nbt.a.2_2')
	{
		return new i_4_nbt_a_2__2(this.mSheet);
	}

	if (id == '4.nbt.a.2_3')
	{
		return new i_4_nbt_a_2__3(this.mSheet);
	}

	//4.nbt.a.2
	if (id == '4.nbt.a.2_4')
	{
		return new i_4_nbt_a_2__4(this.mSheet);
	}

	if (id == '4.nbt.a.2_5')
	{
		return new i_4_nbt_a_2__5(this.mSheet);
	}


	return 0;	
}
		
});

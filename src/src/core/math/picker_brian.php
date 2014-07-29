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
        id = id.replace(/^\s+|\s+$/g,'')

	//4.nbt.a.2
	if (id == '4.nbt.a.2_1')
	{
		return new i_4_nbt_a_2__1(this.mSheet);
	}

	if (id == '4.nbt.a.2_2')
	{
		return new i_4_nbt_a_2__2(this.mSheet);
	}

	if (id == '4.nbt.a.2_3')
	{
		return new i_4_nbt_a_2__3(this.mSheet);
	}

	if (id == '4.nbt.a.2_4')
	{
		return new i_4_nbt_a_2__4(this.mSheet);
	}

	if (id == '4.nbt.a.2_5')
	{
		return new i_4_nbt_a_2__5(this.mSheet);
	}







	//4.nbt.a.1
	if (id == '4.nbt.a.1_1')
	{
		return new i_4_nbt_a_1__1(this.mSheet);
	}

	if (id == '4.nbt.a.1_2')
	{
		return new i_4_nbt_a_1__2(this.mSheet);
	}

	if (id == '4.nbt.a.1_3')
	{
		return new i_4_nbt_a_1__3(this.mSheet);
	}

	if (id == '4.nbt.a.1_4')
	{
		return new i_4_nbt_a_1__4(this.mSheet);
	}

	if (id == '4.nbt.a.1_5')
	{
		return new i_4_nbt_a_1__5(this.mSheet);
	}

	if (id == '4.nbt.a.1_6')
	{
		return new i_4_nbt_a_1__6(this.mSheet);
	}

	if (id == '4.nbt.a.1_7')
	{
		return new i_4_nbt_a_1__7(this.mSheet);
	}

	if (id == '4.nbt.a.1_8')
	{
		return new i_4_nbt_a_1__8(this.mSheet);
	}

	if (id == '4.nbt.a.1_9')
	{
		return new i_4_nbt_a_1__9(this.mSheet);
	}

	if (id == '4.nbt.a.1_10')
	{
		return new i_4_nbt_a_1__10(this.mSheet);
	}



	//4.nbt.b.4
	if (id == '4.nbt.b.4_1')
	{
		return new i_4_nbt_b_4__1(this.mSheet);
	}

	//4.nbt.b.4
	if (id == '4.nbt.b.4_2')
	{
		return new i_4_nbt_b_4__2(this.mSheet);
	}



	//4.nbt.b.5
	if (id == '4.nbt.b.5_1')
	{
		return new i_4_nbt_b_5__1(this.mSheet);
	}

	if (id == '4.nbt.b.5_2')
	{
		return new i_4_nbt_b_5__2(this.mSheet);
	}

	if (id == '4.md.a.3_1')
	{
		return new i_4_md_a_3__1(this.mSheet);
	}


	
	return 0;	
}
		
});

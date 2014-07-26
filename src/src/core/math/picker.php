/* PICKER: 
this class will return an item if you  call getItem(1) and pass a typeid.
*/ 

var Picker = new Class(
{

initialize: function(sheet)
{
	this.mSheet = sheet;
},

getItem: function(id)
{
	//k.cc.a.1
	if (id == 'k.cc.a.1_1')
	{
		return new i_k_cc_a_1__1(this.mSheet);
	}
	if (id == 'k.cc.a.1_2')
	{
		return new i_k_cc_a_1__2(this.mSheet);
	}
	if (id == 'k.cc.a.1_3')
	{
		return new i_k_cc_a_1__3(this.mSheet);
	}
	if (id == 'k.cc.a.1_4')
	{
		return new i_k_cc_a_1__4(this.mSheet);
	}

	//k.cc.a.2
	if (id == 101)
	{
		return new i_101(this.mSheet);
	}
	if (id == 102)
	{
		return new i_102(this.mSheet);
	}
	if (id == 103)
	{
		return new i_103(this.mSheet);
	}

	//k.cc.a.3
	if (id == 201)
	{
		return new i_201(this.mSheet);
	}
	if (id == 202)
	{
		return new i_202(this.mSheet);
	}
	if (id == 203)
	{
		return new i_203(this.mSheet);
	}
	if (id == 204)
	{
		return new i_204(this.mSheet);
	}
	
	//k.cc.b.5
	if (id == 601)
	{
		return new i_601(this.mSheet);
	}
	if (id == 602)
	{
		return new i_602(this.mSheet);
	}
	if (id == 603)
	{
		return new i_602(this.mSheet);
	}
	if (id == 604)
	{
		return new i_604(this.mSheet);
	}
	
	//k.cc.c.6
	if (id == 701)
	{
		return new i_701(this.mSheet);
	}
	
	//4.nbt.a.2
	if (id == 999991)
	{
		return new i_999991(this.mSheet);
	}


	
}
		
});

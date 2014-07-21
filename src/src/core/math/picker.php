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
	id = parseInt(id);		

	//k.cc.a.1
	if (id == 1)
	{
		return new i_k_cc_a_1_t_1(this.mSheet);
	}
	if (id == 2)
	{
		return new i_k_cc_a_1_t_2(this.mSheet);
	}
	if (id == 3)
	{
		return new i_k_cc_a_1_t_3(this.mSheet);
	}
	if (id == 4)
	{
		return new i_k_cc_a_1_t_4(this.mSheet);
	}

	//k.cc.a.2
	if (id == 101)
	{
		return new i_k_cc_a_2_t_1(this.mSheet);
	}
	if (id == 102)
	{
		return new i_k_cc_a_2_t_2(this.mSheet);
	}
	if (id == 103)
	{
		return new i_k_cc_a_2_t_3(this.mSheet);
	}
	if (id == 104)
	{
		return new i_k_cc_a_2_t_4(this.mSheet);
	}

	//k.cc.a.3
	if (id == 201)
	{
		return new i_k_cc_a_3_t_1(this.mSheet);
	}
	if (id == 202)
	{
		return new i_k_cc_a_3_t_2(this.mSheet);
	}
	if (id == 203)
	{
		return new i_k_cc_a_3_t_3(this.mSheet);
	}
	if (id == 204)
	{
		return new i_k_cc_a_3_t_4(this.mSheet);
	}
}
		
});

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
}
		
});

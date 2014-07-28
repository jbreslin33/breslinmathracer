/* PICKER: 
this class will return an item or 0 if you  call getItem(1) and pass a typeid.
*/ 

var Picker = new Class(
{

initialize: function(sheet)
{
	this.mSheet = sheet;
},

getItem: function(id)
{
	id = id.replace(/^\s+|\s+$/g,'')
	APPLICATION.log('id in getItem:' + id + 'end');
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
		APPLICATION.log('id is good');
		return new i_k_cc_a_1__4(this.mSheet);
	}

	//k.cc.a.2
	if (id == 'k.cc.a.2_1')
	{
		return new i_k_cc_a_2__1(this.mSheet);
	}
	if (id == 'k.cc.a.2_2')
	{
		return new i_k_cc_a_2__2(this.mSheet);
	}
	if (id == 'k.cc.a.2_3')
	{
		return new i_k_cc_a_2__3(this.mSheet);
	}	

	//k.cc.a.3
	if (id == 'k.cc.a.3_1')
	{
		return new i_k_cc_a_3__1(this.mSheet);
	}
	if (id == 'k.cc.a.3_2')
	{
		return new i_k_cc_a_3__2(this.mSheet);
	}
	if (id == 'k.cc.a.3_3')
	{
		return new i_k_cc_a_3__3(this.mSheet);
	}
	if (id == 'k.cc.a.3_4')
	{
		return new i_k_cc_a_3__4(this.mSheet);
	}

	return 0;	
}
		
});

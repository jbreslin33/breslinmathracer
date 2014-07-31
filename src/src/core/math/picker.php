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

	//k.cc.b.4.a 
	//MISSING

	//k.cc.b.4.b 
	//MISSING

	//k.cc.b.4.c 
	//MISSING
 
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

	return 0;	
}
		
});

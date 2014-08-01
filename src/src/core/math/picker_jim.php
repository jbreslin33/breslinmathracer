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

        //k.oa.a.2
        if (id == 'k.oa.a.2_1')
        {
                return new i_k_oa_a_2__1(this.mSheet);
        }
        
        if (id == 'k.oa.a.2_2')
        {
                return new i_k_oa_a_2__2(this.mSheet);
        }

        if (id == 'k.oa.a.2_3')
        {
                return new i_k_oa_a_2__3(this.mSheet);
        }
        
	if (id == 'k.oa.a.2_4')
        {
                return new i_k_oa_a_2__4(this.mSheet);
        }
        
	//k.oa.a.4
        if (id == 'k.oa.a.4_1')
        {
                return new i_k_oa_a_4__1(this.mSheet);
        }
	
	//k.oa.a.5
        if (id == 'k.oa.a.5_1')
        {
                return new i_k_oa_a_5__1(this.mSheet);
        }


	/*** GRADE 5 ***/

	//5.oa.a.1
	if (id == '5.oa.a.1_1')
        {
                return new i_5_oa_a_1__1(this.mSheet);
        }
	if (id == '5.oa.a.1_2')
        {
                return new i_5_oa_a_1__2(this.mSheet);
        }
	if (id == '5.oa.a.1_3')
        {
                return new i_5_oa_a_1__3(this.mSheet);
        }
	if (id == '5.oa.a.1_4')
        {
                return new i_5_oa_a_1__4(this.mSheet);
        }
	if (id == '5.oa.a.1_5')
        {
                return new i_5_oa_a_1__5(this.mSheet);
        }
	if (id == '5.oa.a.1_6')
        {
                return new i_5_oa_a_1__6(this.mSheet);
        }
	if (id == '5.oa.a.1_7')
        {
                return new i_5_oa_a_1__7(this.mSheet);
        }
	if (id == '5.oa.a.1_8')
        {
                return new i_5_oa_a_1__8(this.mSheet);
        }
	if (id == '5.oa.a.1_9')
        {
                return new i_5_oa_a_1__9(this.mSheet);
        }
	if (id == '5.oa.a.1_10')
        {
                return new i_5_oa_a_1__10(this.mSheet);
        }

        //5.oa.a.2
        if (id == '5.oa.a.2_1')
        {
                return new i_5_oa_a_2__1(this.mSheet);
        }
        if (id == '5.oa.a.2_2')
        {
                return new i_5_oa_a_2__2(this.mSheet);
        }
        if (id == '5.oa.a.2_3')
        {
                return new i_5_oa_a_2__3(this.mSheet);
        }
        if (id == '5.oa.a.2_4')
        {
                return new i_5_oa_a_2__4(this.mSheet);
        }
        if (id == '5.oa.a.2_5')
        {
                return new i_5_oa_a_2__5(this.mSheet);
        }
        if (id == '5.oa.a.2_6')
        {
                return new i_5_oa_a_2__6(this.mSheet);
        }
        if (id == '5.oa.a.2_7')
        {
                return new i_5_oa_a_2__7(this.mSheet);
        }
        if (id == '5.oa.a.2_8')
        {
                return new i_5_oa_a_2__8(this.mSheet);
        }
        if (id == '5.oa.a.2_9')
        {
                return new i_5_oa_a_2__9(this.mSheet);
        }
        if (id == '5.oa.a.2_10')
        {
                return new i_5_oa_a_2__10(this.mSheet);
        }

	return 0;	
}
		
});

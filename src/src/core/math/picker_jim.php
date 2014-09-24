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

        if (id == 'k.oa.a.5_2')
        {
                return new i_k_oa_a_5__2(this.mSheet);
        }

	//k.nbt.a.1
        if (id == 'k.nbt.a.1_1')
        {
                return new i_k_nbt_a_1__1(this.mSheet);
        }
	
	/*** GRADE 1 ***/
	//1.oa.a.1
	if (id == '1.oa.a.1_1')
        {
                return new i_1_oa_a_1__1(this.mSheet);
	}
	if (id == '1.oa.a.1_2')
        {
                return new i_1_oa_a_1__2(this.mSheet);
	}
	
	/*** GRADE 2 ***/
	//2.oa.a.1
	if (id == '2.oa.a.1_1')
        {
                return new i_2_oa_a_1__1(this.mSheet);
        }
	if (id == '2.oa.a.1_2')
        {
                return new i_2_oa_a_1__2(this.mSheet);
        }
	if (id == '2.oa.a.1_3')
        {
                return new i_2_oa_a_1__3(this.mSheet);
        }
	if (id == '2.oa.a.1_4')
        {
                return new i_2_oa_a_1__4(this.mSheet);
        }
	if (id == '2.oa.a.1_5')
        {
                return new i_2_oa_a_1__5(this.mSheet);
        }
	if (id == '2.oa.a.1_6')
        {
                return new i_2_oa_a_1__6(this.mSheet);
        }
	if (id == '2.oa.a.1_7')
        {
                return new i_2_oa_a_1__7(this.mSheet);
        }
	if (id == '2.oa.a.1_8')
        {
                return new i_2_oa_a_1__8(this.mSheet);
        }
	if (id == '2.oa.a.1_9')
        {
                return new i_2_oa_a_1__9(this.mSheet);
        }
	if (id == '2.oa.a.1_10')
        {
                return new i_2_oa_a_1__10(this.mSheet);
        }
	if (id == '2.oa.a.1_11')
        {
                return new i_2_oa_a_1__11(this.mSheet);
        }
	if (id == '2.oa.a.1_12')
        {
                return new i_2_oa_a_1__12(this.mSheet);
        }
	if (id == '2.oa.a.1_13')
        {
                return new i_2_oa_a_1__13(this.mSheet);
        }
	if (id == '2.oa.a.1_14')
        {
                return new i_2_oa_a_1__14(this.mSheet);
        }
	if (id == '2.oa.a.1_15')
        {
                return new i_2_oa_a_1__15(this.mSheet);
        }
	if (id == '2.oa.a.1_16')
        {
                return new i_2_oa_a_1__16(this.mSheet);
        }
	if (id == '2.oa.a.1_17')
        {
                return new i_2_oa_a_1__17(this.mSheet);
        }
	if (id == '2.oa.a.1_18')
        {
                return new i_2_oa_a_1__18(this.mSheet);
        }
	if (id == '2.oa.a.1_19')
        {
                return new i_2_oa_a_1__19(this.mSheet);
        }
	if (id == '2.oa.a.1_20')
        {
                return new i_2_oa_a_1__20(this.mSheet);
        }
	
	/*** GRADE 3 ***/
	//3.oa.a.1
	if (id == '3.oa.a.1_3')
        {
                return new i_3_oa_a_1__3(this.mSheet);
        }
	if (id == '3.oa.a.1_4')
        {
                return new i_3_oa_a_1__4(this.mSheet);
        }
	if (id == '3.oa.a.1_5')
        {
                return new i_3_oa_a_1__5(this.mSheet);
        }
	if (id == '3.oa.a.1_6')
        {
                return new i_3_oa_a_1__6(this.mSheet);
        }
	if (id == '3.oa.a.1_7')
        {
                return new i_3_oa_a_1__7(this.mSheet);
        }
	if (id == '3.oa.a.1_8')
        {
                return new i_3_oa_a_1__8(this.mSheet);
        }
	if (id == '3.oa.a.1_9')
        {
                return new i_3_oa_a_1__9(this.mSheet);
        }
	if (id == '3.oa.a.1_10')
        {
                return new i_3_oa_a_1__10(this.mSheet);
        }
	if (id == '3.oa.a.1_11')
        {
                return new i_3_oa_a_1__11(this.mSheet);
        }

	//-----------4th GRADE---------
        //4.oa.a.1
        if (id == '4.oa.a.1_5')
        {
                return new i_4_oa_a_1__5(this.mSheet);
        }
        if (id == '4.oa.a.1_6')
        {
                return new i_4_oa_a_1__6(this.mSheet);
        }
        if (id == '4.oa.a.1_7')
        {
                return new i_4_oa_a_1__7(this.mSheet);
        }
        if (id == '4.oa.a.1_8')
        {
                return new i_4_oa_a_1__8(this.mSheet);
        }
        if (id == '4.oa.a.1_9')
        {
                return new i_4_oa_a_1__9(this.mSheet);
        }
        if (id == '4.oa.a.1_10')
        {
                return new i_4_oa_a_1__10(this.mSheet);
        }

	/*** GRADE 5 ***/
	//5.oa.a.1
	if (id == '5.oa.a.1_0_50')
        {
                return new i_5_oa_a_1__0_50(this.mSheet);
        }
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
	if (id == '5.oa.a.1_11')
        {
                return new i_5_oa_a_1__11(this.mSheet);
        }
	if (id == '5.oa.a.1_12')
        {
                return new i_5_oa_a_1__12(this.mSheet);
        }
	if (id == '5.oa.a.1_13')
        {
                return new i_5_oa_a_1__13(this.mSheet);
        }
	if (id == '5.oa.a.1_14')
        {
                return new i_5_oa_a_1__14(this.mSheet);
        }
	if (id == '5.oa.a.1_15')
        {
                return new i_5_oa_a_1__15(this.mSheet);
        }
	if (id == '5.oa.a.1_16')
        {
                return new i_5_oa_a_1__16(this.mSheet);
        }
	if (id == '5.oa.a.1_17')
        {
                return new i_5_oa_a_1__17(this.mSheet);
        }
	if (id == '5.oa.a.1_18')
        {
                return new i_5_oa_a_1__18(this.mSheet);
        }
	if (id == '5.oa.a.1_19')
        {
                return new i_5_oa_a_1__19(this.mSheet);
        }
	if (id == '5.oa.a.1_20')
        {
                return new i_5_oa_a_1__20(this.mSheet);
        }
	if (id == '5.oa.a.1_21')
        {
                return new i_5_oa_a_1__21(this.mSheet);
        }
	if (id == '5.oa.a.1_22')
        {
                return new i_5_oa_a_1__22(this.mSheet);
        }
	if (id == '5.oa.a.1_23')
        {
                return new i_5_oa_a_1__23(this.mSheet);
        }
	if (id == '5.oa.a.1_24')
        {
                return new i_5_oa_a_1__24(this.mSheet);
        }
	if (id == '5.oa.a.1_25')
        {
                return new i_5_oa_a_1__25(this.mSheet);
        }
	if (id == '5.oa.a.1_26')
        {
                return new i_5_oa_a_1__26(this.mSheet);
        }
	if (id == '5.oa.a.1_27')
        {
                return new i_5_oa_a_1__27(this.mSheet);
        }
	if (id == '5.oa.a.1_28')
        {
                return new i_5_oa_a_1__28(this.mSheet);
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
        if (id == '5.oa.a.2_11')
        {
                return new i_5_oa_a_2__11(this.mSheet);
        }
        if (id == '5.oa.a.2_12')
        {
                return new i_5_oa_a_2__12(this.mSheet);
        }
        if (id == '5.oa.a.2_13')
        {
                return new i_5_oa_a_2__13(this.mSheet);
        }
        if (id == '5.oa.a.2_14')
        {
                return new i_5_oa_a_2__14(this.mSheet);
        }
        if (id == '5.oa.a.2_15')
        {
                return new i_5_oa_a_2__15(this.mSheet);
        }
        if (id == '5.oa.a.2_16')
        {
                return new i_5_oa_a_2__16(this.mSheet);
        }
        if (id == '5.oa.a.2_17')
        {
                return new i_5_oa_a_2__17(this.mSheet);
        }
        if (id == '5.oa.a.2_18')
        {
                return new i_5_oa_a_2__18(this.mSheet);
        }
        if (id == '5.oa.a.2_19')
        {
                return new i_5_oa_a_2__19(this.mSheet);
        }
        if (id == '5.oa.a.2_20')
        {
                return new i_5_oa_a_2__20(this.mSheet);
        }
       
	//5.oa.b.3 
	if (id == '5.oa.b.3_1')
        {
                return new i_5_oa_b_3__1(this.mSheet);
        }
	
	/*** GRADE 6 ***/
	//6.rp.a.1
	if (id == '6.rp.a.1_1')
        {
                return new i_6_rp_a_1__1(this.mSheet);
        }
	if (id == '6.rp.a.1_2')
        {
                return new i_6_rp_a_1__2(this.mSheet);
        }
	if (id == '6.rp.a.1_3')
        {
                return new i_6_rp_a_1__3(this.mSheet);
        }
	if (id == '6.rp.a.1_4')
        {
                return new i_6_rp_a_1__4(this.mSheet);
        }
	if (id == '6.rp.a.1_5')
        {
                return new i_6_rp_a_1__5(this.mSheet);
        }
	if (id == '6.rp.a.1_6')
        {
                return new i_6_rp_a_1__6(this.mSheet);
        }
	if (id == '6.rp.a.1_7')
        {
                return new i_6_rp_a_1__7(this.mSheet);
        }
	if (id == '6.rp.a.1_8')
        {
                return new i_6_rp_a_1__8(this.mSheet);
        }
	if (id == '6.rp.a.1_9')
        {
                return new i_6_rp_a_1__9(this.mSheet);
        }
	if (id == '6.rp.a.1_10')
        {
                return new i_6_rp_a_1__10(this.mSheet);
        }
	
	//6.rp.a.2
	if (id == '6.rp.a.2_1')
        {
                return new i_6_rp_a_2__1(this.mSheet);
        }
	if (id == '6.rp.a.2_2')
        {
                return new i_6_rp_a_2__2(this.mSheet);
        }
	if (id == '6.rp.a.2_3')
        {
                return new i_6_rp_a_2__3(this.mSheet);
        }
	if (id == '6.rp.a.2_4')
        {
                return new i_6_rp_a_2__4(this.mSheet);
        }
	if (id == '6.rp.a.2_5')
        {
                return new i_6_rp_a_2__5(this.mSheet);
        }
	if (id == '6.rp.a.2_6')
        {
                return new i_6_rp_a_2__6(this.mSheet);
        }
	if (id == '6.rp.a.2_7')
        {
                return new i_6_rp_a_2__7(this.mSheet);
        }
	if (id == '6.rp.a.2_8')
        {
                return new i_6_rp_a_2__8(this.mSheet);
        }
	if (id == '6.rp.a.2_9')
        {
                return new i_6_rp_a_2__9(this.mSheet);
        }
	if (id == '6.rp.a.2_10')
        {
                return new i_6_rp_a_2__10(this.mSheet);
        }

	return 0;	
}
		
});

/* PICKERBRIAN: 
this class will return an item or 0 if you  call getItem(1) and pass a typeid.
*/ 

var PickerBrian = new Class(
{

initialize: function(sheet)
{
	this.mSheet = sheet;
},

getDev: function()
{
        //return '6.g.a.2_5';
      //return '4.oa.c.5_11';
      return '5.md.c.5.c_1';
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
	if (id == '4.nbt.b.5_3')
	{
		return new i_4_nbt_b_5__3(this.mSheet);
	}
	if (id == '4.nbt.b.5_4')
	{
		return new i_4_nbt_b_5__4(this.mSheet);
	}
	if (id == '4.nbt.b.5_5')
	{
		return new i_4_nbt_b_5__5(this.mSheet);
	}
	
	//4.nbt.b.5
  if (id == '4.nbt.b.6_1')
	{
		return new i_4_nbt_b_6__1(this.mSheet);
	}
  if (id == '4.nbt.b.6_2')
	{
		return new i_4_nbt_b_6__2(this.mSheet);
	}
  if (id == '4.nbt.b.6_3')
	{
		return new i_4_nbt_b_6__3(this.mSheet);
	}
  if (id == '4.nbt.b.6_4')
	{
		return new i_4_nbt_b_6__4(this.mSheet);
	}
  if (id == '4.nbt.b.6_5')
	{
		return new i_4_nbt_b_6__5(this.mSheet);
	}
  if (id == '4.nbt.b.6_6')
	{
		return new i_4_nbt_b_6__6(this.mSheet);
	}
  if (id == '4.nbt.b.6_7')
	{
		return new i_4_nbt_b_6__7(this.mSheet);
	}
  if (id == '4.nbt.b.6_8')
	{
		return new i_4_nbt_b_6__8(this.mSheet);
	}

  if (id == '4.nf.a.1_1')
	{
		return new i_4_nf_a_1__1(this.mSheet);
	}
  if (id == '4.nf.a.1_2')
	{
		return new i_4_nf_a_1__2(this.mSheet);
	}
  if (id == '4.nf.a.1_3')
	{
		return new i_4_nf_a_1__3(this.mSheet);
	}
  if (id == '4.nf.a.1_4')
	{
		return new i_4_nf_a_1__4(this.mSheet);
	}

  if (id == '4.nf.a.2_1')
	{
		return new i_4_nf_a_2__1(this.mSheet);
	}

  if (id == '4.nf.b.3.a_1')
	{
		return new i_4_nf_b_3_a__1(this.mSheet);
	}
  if (id == '4.nf.b.3.a_2')
	{
		return new i_4_nf_b_3_a__2(this.mSheet);
	}
  if (id == '4.nf.b.3.a_3')
	{
		return new i_4_nf_b_3_a__3(this.mSheet);
	}


  if (id == '4.nf.b.3.b_1')
	{
		return new i_4_nf_b_3_b__1(this.mSheet);
	}

  if (id == '4.nf.b.3.c_1')
	{
		return new i_4_nf_b_3_c__1(this.mSheet);
	}
  if (id == '4.nf.b.3.c_2')
	{
		return new i_4_nf_b_3_c__2(this.mSheet);
	}

  if (id == '4.nf.b.3.d_1')
	{
		return new i_4_nf_b_3_d__1(this.mSheet);
	}
  if (id == '4.nf.b.3.d_2')
	{
		return new i_4_nf_b_3_d__2(this.mSheet);
	}

  if (id == '4.nf.b.4.a_1')
	{
		return new i_4_nf_b_4_a__1(this.mSheet);
	}

  if (id == '4.nf.b.4.b_1')
	{
		return new i_4_nf_b_4_b__1(this.mSheet);
	}
  
  if (id == '4.nf.b.4.c_1')
	{
		return new i_4_nf_b_4_c__1(this.mSheet);
	}

	if (id == '4.md.a.3_1')
	{
		return new i_4_md_a_3__1(this.mSheet);
	}
	if (id == '4.md.a.3_2')
	{
		return new i_4_md_a_3__2(this.mSheet);
	}
	if (id == '4.md.a.3_3')
	{
		return new i_4_md_a_3__3(this.mSheet);
	}
	if (id == '4.md.a.3_4')
	{
		return new i_4_md_a_3__4(this.mSheet);
	}
	if (id == '4.md.a.3_5')
	{
		return new i_4_md_a_3__5(this.mSheet);
	}
	if (id == '4.md.a.3_6')
	{
		return new i_4_md_a_3__6(this.mSheet);
	}
	if (id == '4.md.a.3_7')
	{
		return new i_4_md_a_3__7(this.mSheet);
	}
	if (id == '4.md.a.3_8')
	{
		return new i_4_md_a_3__8(this.mSheet);
	}
	if (id == '4.md.a.3_9')
	{
		return new i_4_md_a_3__9(this.mSheet);
	}
	if (id == '4.md.a.3_10')
	{
		return new i_4_md_a_3__10(this.mSheet);
	}


//5.oa.b.3 
	if (id == '5.oa.b.3_2')
        {
                return new i_5_oa_b_3__2(this.mSheet);
        }

if (id == '5.oa.b.3_3')
        {
                return new i_5_oa_b_3__3(this.mSheet);
        }

if (id == '5.oa.b.3_4')
        {
                return new i_5_oa_b_3__4(this.mSheet);
        }

if (id == '5.oa.b.3_5')
        {
                return new i_5_oa_b_3__5(this.mSheet);
        }

if (id == '5.oa.b.3_6')
        {
                return new i_5_oa_b_3__6(this.mSheet);
        }

if (id == '5.oa.b.3_7')
        {
                return new i_5_oa_b_3__7(this.mSheet);
        }
if (id == '5.md.a.1_1')
        {
                return new i_5_md_a_1__1(this.mSheet);
        }
if (id == '5.md.a.1_2')
        {
                return new i_5_md_a_1__2(this.mSheet);
        }
if (id == '5.md.a.1_3')
        {
                return new i_5_md_a_1__3(this.mSheet);
        }
if (id == '5.md.a.1_4')
        {
                return new i_5_md_a_1__4(this.mSheet);
        }
if (id == '5.md.a.1_5')
        {
                return new i_5_md_a_1__5(this.mSheet);
        }
if (id == '5.md.a.1_6')
        {
                return new i_5_md_a_1__6(this.mSheet);
        }
if (id == '5.md.a.1_7')
        {
                return new i_5_md_a_1__7(this.mSheet);
        }
if (id == '5.md.a.1_8')
        {
                return new i_5_md_a_1__8(this.mSheet);
        }
if (id == '5.md.a.1_9')
        {
                return new i_5_md_a_1__9(this.mSheet);
        }
if (id == '5.md.a.1_10')
        {
                return new i_5_md_a_1__10(this.mSheet);
        }
if (id == '5.md.a.1_11')
        {
                return new i_5_md_a_1__11(this.mSheet);
        }
if (id == '5.md.a.1_12')
        {
                return new i_5_md_a_1__12(this.mSheet);
        }
if (id == '5.md.a.1_13')
        {
                return new i_5_md_a_1__13(this.mSheet);
        }
if (id == '5.md.a.1_14')
        {
                return new i_5_md_a_1__14(this.mSheet);
        }
if (id == '5.md.a.1_15')
        {
                return new i_5_md_a_1__15(this.mSheet);
        }

if (id == '5.md.b.2_1')
        {
                return new i_5_md_b_2__1(this.mSheet);
        }
if (id == '5.md.b.2_2')
        {
                return new i_5_md_b_2__2(this.mSheet);
        }
if (id == '5.md.b.2_3')
        {
                return new i_5_md_b_2__3(this.mSheet);
        }
if (id == '5.md.b.2_4')
        {
                return new i_5_md_b_2__4(this.mSheet);
        }
if (id == '5.md.b.2_5')
        {
                return new i_5_md_b_2__5(this.mSheet);
        }
if (id == '5.md.b.2_6')
        {
                return new i_5_md_b_2__6(this.mSheet);
        }
if (id == '5.md.b.2_7')
        {
                return new i_5_md_b_2__7(this.mSheet);
        }

if (id == '5.md.c.3.a_1')
        {
                return new i_5_md_c_3_a__1(this.mSheet);
        }
if (id == '5.md.c.3.a_2')
        {
                return new i_5_md_c_3_a__2(this.mSheet);
        }
if (id == '5.md.c.3.a_3')
        {
                return new i_5_md_c_3_a__3(this.mSheet);
        }
if (id == '5.md.c.3.a_4')
        {
                return new i_5_md_c_3_a__4(this.mSheet);
        }
if (id == '5.md.c.3.a_5')
        {
                return new i_5_md_c_3_a__5(this.mSheet);
        }
if (id == '5.md.c.3.a_6')
        {
                return new i_5_md_c_3_a__6(this.mSheet);
        }
if (id == '5.md.c.3.a_7')
        {
                return new i_5_md_c_3_a__7(this.mSheet);
        }
if (id == '5.md.c.3.a_8')
        {
                return new i_5_md_c_3_a__8(this.mSheet);
        }
if (id == '5.md.c.3.a_9')
        {
                return new i_5_md_c_3_a__9(this.mSheet);
        }
if (id == '5.md.c.3.a_10')
        {
                return new i_5_md_c_3_a__10(this.mSheet);
        }
if (id == '5.md.c.3.a_11')
        {
                return new i_5_md_c_3_a__11(this.mSheet);
        }

if (id == '5.md.c.4_1')
        {
                return new i_5_md_c_4__1(this.mSheet);
        }
if (id == '5.md.c.4_2')
        {
                return new i_5_md_c_4__2(this.mSheet);
        }
if (id == '5.md.c.5.a_1')
        {
                return new i_5_md_c_5_a__1(this.mSheet);
        }
if (id == '5.md.c.5.a_2')
        {
                return new i_5_md_c_5_a__2(this.mSheet);
        }
if (id == '5.md.c.5.a_3')
        {
                return new i_5_md_c_5_a__3(this.mSheet);
        }

if (id == '5.md.c.5.b_1')
        {
                return new i_5_md_c_5_b__1(this.mSheet);
        }
if (id == '5.md.c.5.b_2')
        {
                return new i_5_md_c_5_b__2(this.mSheet);
        }
if (id == '5.md.c.5.b_3')
        {
                return new i_5_md_c_5_b__3(this.mSheet);
        }
if (id == '5.md.c.5.b_4')
        {
                return new i_5_md_c_5_b__4(this.mSheet);
        }
if (id == '5.md.c.5.b_5')
        {
                return new i_5_md_c_5_b__5(this.mSheet);
        }
if (id == '5.md.c.5.b_6')
        {
                return new i_5_md_c_5_b__6(this.mSheet);
        }
if (id == '5.md.c.5.b_7')
        {
                return new i_5_md_c_5_b__7(this.mSheet);
        }

if (id == '5.md.c.5.c_1')
        {
                return new i_5_md_c_5_c__1(this.mSheet);
        }


if (id == '5.g.a.1_1')
        {
                return new i_5_g_a_1__1(this.mSheet);
        }
if (id == '5.g.a.1_2')
        {
                return new i_5_g_a_1__2(this.mSheet);
        }
if (id == '5.g.a.1_3')
        {
                return new i_5_g_a_1__3(this.mSheet);
        }
if (id == '5.g.a.1_4')
        {
                return new i_5_g_a_1__4(this.mSheet);
        }

if (id == '5.g.a.1_5')
        {
                return new i_5_g_a_1__5(this.mSheet);
        }

if (id == '5.g.a.2_1')
        {
                return new i_5_g_a_2__1(this.mSheet);
        }
if (id == '5.g.a.2_2')
        {
                return new i_5_g_a_2__2(this.mSheet);
        }
if (id == '5.g.a.2_3')
        {
                return new i_5_g_a_2__3(this.mSheet);
        }
if (id == '5.g.a.2_4')
        {
                return new i_5_g_a_2__4(this.mSheet);
        }
if (id == '5.g.a.2_5')
        {
                return new i_5_g_a_2__5(this.mSheet);
        }
if (id == '5.g.b.3_1')
        {
                return new i_5_g_b_3__1(this.mSheet);
        }
if (id == '5.g.b.3_2')
        {
                return new i_5_g_b_3__2(this.mSheet);
        }
if (id == '5.g.b.3_3')
        {
                return new i_5_g_b_3__3(this.mSheet);
        }
if (id == '5.g.b.3_4')
        {
                return new i_5_g_b_3__4(this.mSheet);
        }
if (id == '5.g.b.3_5')
        {
                return new i_5_g_b_3__5(this.mSheet);
        }

if (id == '5.g.b.4_1')
        {
                return new i_5_g_b_4__1(this.mSheet);
        }
if (id == '5.g.b.4_2')
        {
                return new i_5_g_b_4__2(this.mSheet);
        }
if (id == '5.g.b.4_3')
        {
                return new i_5_g_b_4__3(this.mSheet);
        }
if (id == '5.g.b.4_4')
        {
                return new i_5_g_b_4__4(this.mSheet);
        }
if (id == '5.g.b.4_5')
        {
                return new i_5_g_b_4__5(this.mSheet);
        }

//6.rp.a.3.a
	if (id == '6.rp.a.3.a_1')
        {
                return new i_6_rp_a_3_a__1(this.mSheet);
        }
  if (id == '6.rp.a.3.a_2')
        {
                return new i_6_rp_a_3_a__2(this.mSheet);
        }
if (id == '6.rp.a.3.a_3')
        {
                return new i_6_rp_a_3_a__3(this.mSheet);
        }

//6.rp.a.3.b
	if (id == '6.rp.a.3.b_1')
        {
                return new i_6_rp_a_3_b__1(this.mSheet);
        }
  if (id == '6.rp.a.3.b_2')
        {
                return new i_6_rp_a_3_b__2(this.mSheet);
        }
  if (id == '6.rp.a.3.b_3')
        {
                return new i_6_rp_a_3_b__3(this.mSheet);
        }
  if (id == '6.rp.a.3.b_4')
        {
                return new i_6_rp_a_3_b__4(this.mSheet);
        }
  if (id == '6.rp.a.3.b_5')
        {
                return new i_6_rp_a_3_b__5(this.mSheet);
        }
  if (id == '6.rp.a.3.b_6')
        {
                return new i_6_rp_a_3_b__6(this.mSheet);
        }

//6.rp.a.3.c
	if (id == '6.rp.a.3.c_1')
        {
                return new i_6_rp_a_3_c__1(this.mSheet);
        }
  if (id == '6.rp.a.3.c_2')
        {
                return new i_6_rp_a_3_c__2(this.mSheet);
        }
  if (id == '6.rp.a.3.c_3')
        {
                return new i_6_rp_a_3_c__3(this.mSheet);
        }
  if (id == '6.rp.a.3.c_4')
        {
                return new i_6_rp_a_3_c__4(this.mSheet);
        }

//6.rp.a.3.d
  if (id == '6.rp.a.3.d_1')
        {
                return new i_6_rp_a_3_d__1(this.mSheet);
        }
  if (id == '6.rp.a.3.d_2')
        {
                return new i_6_rp_a_3_d__2(this.mSheet);
        }

//6.ns.a.1
  if (id == '6.ns.a.1_1')
        {
                return new i_6_ns_a_1__1(this.mSheet);
        }
  if (id == '6.ns.a.1_2')
        {
                return new i_6_ns_a_1__2(this.mSheet);
        }

  if (id == '6.ns.a.1_3')
        {
                return new i_6_ns_a_1__3(this.mSheet);
        }

  if (id == '6.ns.a.1_4')
        {
                return new i_6_ns_a_1__4(this.mSheet);
        }

  if (id == '6.ns.a.1_5')
        {
                return new i_6_ns_a_1__5(this.mSheet);
        }

  if (id == '6.ns.a.1_6')
        {
                return new i_6_ns_a_1__6(this.mSheet);
        }

//6.ns.b.2
  if (id == '6.ns.b.2_1')
        {
                return new i_6_ns_b_2__1(this.mSheet);
        }
  if (id == '6.ns.b.2_2')
        {
                return new i_6_ns_b_2__2(this.mSheet);
        }

	//6.ns.b.3
	if (id == '6.ns.b.3_1')
	{
		return new i_6_ns_b_3__1(this.mSheet);
        }
	if (id == '6.ns.b.3_2')
	{
		return new i_6_ns_b_3__2(this.mSheet);
        }
	if (id == '6.ns.b.3_3')
	{
		return new i_6_ns_b_3__3(this.mSheet);
        }
	if (id == '6.ns.b.3_4')
	{
		return new i_6_ns_b_3__4(this.mSheet);
        }
	if (id == '6.ns.b.3_5')
	{
		return new i_6_ns_b_3__5(this.mSheet);
        }
	if (id == '6.ns.b.3_6')
	{
		return new i_6_ns_b_3__6(this.mSheet);
        }
	if (id == '6.ns.b.3_7')
	{
		return new i_6_ns_b_3__7(this.mSheet);
        }
	if (id == '6.ns.b.3_8')
	{
		return new i_6_ns_b_3__8(this.mSheet);
        }
	if (id == '6.ns.b.3_9')
	{
		return new i_6_ns_b_3__9(this.mSheet);
        }


//6.ns.b.4
  if (id == '6.ns.b.4_1')
        {
                return new i_6_ns_b_4__1(this.mSheet);
        }

//6.ns.c.5
  if (id == '6.ns.c.5_1')
        {
                return new i_6_ns_c_5__1(this.mSheet);
        }

//6.ns.c.6.a
  if (id == '6.ns.c.6.a_1')
        {
                return new i_6_ns_c_6_a__1(this.mSheet);
        }
  if (id == '6.ns.c.6.a_2')
        {
                return new i_6_ns_c_6_a__2(this.mSheet);
        }
  if (id == '6.ns.c.6.a_3')
        {
                return new i_6_ns_c_6_a__3(this.mSheet);
        } 
  if (id == '6.ns.c.6.a_4')
        {
                return new i_6_ns_c_6_a__4(this.mSheet);
        } 
  if (id == '6.ns.c.6.a_5')
        {
                return new i_6_ns_c_6_a__5(this.mSheet);
        } 

//6.ns.c.6.b
  if (id == '6.ns.c.6.b_1')
        {
                return new i_6_ns_c_6_b__1(this.mSheet);
        }
  if (id == '6.ns.c.6.b_2')
        {
                return new i_6_ns_c_6_b__2(this.mSheet);
        }
  if (id == '6.ns.c.6.b_3')
        {
                return new i_6_ns_c_6_b__3(this.mSheet);
        }
  if (id == '6.ns.c.6.b_4')
        {
                return new i_6_ns_c_6_b__4(this.mSheet);
        }

//6.ns.c.6.c
  if (id == '6.ns.c.6.c_1')
        {
                return new i_6_ns_c_6_c__1(this.mSheet);
        }
  if (id == '6.ns.c.6.c_2')
        {
                return new i_6_ns_c_6_c__2(this.mSheet);
        }
  if (id == '6.ns.c.6.c_3')
        {
                return new i_6_ns_c_6_c__3(this.mSheet);
        }
  if (id == '6.ns.c.6.c_4')
        {
                return new i_6_ns_c_6_c__4(this.mSheet);
        }

//6.ns.c.7.a
  if (id == '6.ns.c.7.a_1')
        {
                return new i_6_ns_c_7_a__1(this.mSheet);
        }
  if (id == '6.ns.c.7.a_2')
        {
                return new i_6_ns_c_7_a__2(this.mSheet);
        }

  if (id == '6.ns.c.7.a_3')
        {
                return new i_6_ns_c_7_a__3(this.mSheet);
        }
  if (id == '6.ns.c.7.a_4')
        {
                return new i_6_ns_c_7_a__4(this.mSheet);
        }
 

//6.ns.c.7.b
  if (id == '6.ns.c.7.b_1')
        {
                return new i_6_ns_c_7_b__1(this.mSheet);
        }

//6.ns.c.7.c
  if (id == '6.ns.c.7.c_1')
        {
                return new i_6_ns_c_7_c__1(this.mSheet);
        }
  if (id == '6.ns.c.7.c_2')
        {
                return new i_6_ns_c_7_c__2(this.mSheet);
        }
  if (id == '6.ns.c.7.c_3')
        {
                return new i_6_ns_c_7_c__3(this.mSheet);
        }
  if (id == '6.ns.c.7.c_4')
        {
                return new i_6_ns_c_7_c__4(this.mSheet);
        }

//6.ns.c.8
  if (id == '6.ns.c.8_1')
        {
                return new i_6_ns_c_8__1(this.mSheet);
        }
  if (id == '6.ns.c.8_2')
        {
                return new i_6_ns_c_8__2(this.mSheet);
        }
  if (id == '6.ns.c.8_3')
        {
                return new i_6_ns_c_8__3(this.mSheet);
        }

//6.ee.a.2.b
  if (id == '6.ee.a.2.b_1')
        {
                return new i_6_ee_a_2_b__1(this.mSheet);
        }
  if (id == '6.ee.a.2.b_2')
        {
                return new i_6_ee_a_2_b__2(this.mSheet);
        }
  if (id == '6.ee.a.2.b_3')
        {
                return new i_6_ee_a_2_b__3(this.mSheet);
        }
  if (id == '6.ee.a.2.b_4')
        {
                return new i_6_ee_a_2_b__4(this.mSheet);
        }
  if (id == '6.ee.a.2.b_5')
        {
                return new i_6_ee_a_2_b__5(this.mSheet);
        }
  if (id == '6.ee.a.2.b_6')
        {
                return new i_6_ee_a_2_b__6(this.mSheet);
        }
  if (id == '6.ee.a.2.b_7')
        {
                return new i_6_ee_a_2_b__7(this.mSheet);
        }
  if (id == '6.ee.a.2.b_8')
        {
                return new i_6_ee_a_2_b__8(this.mSheet);
        }
  if (id == '6.ee.a.2.b_10')
        {
                return new i_6_ee_a_2_b__10(this.mSheet);
        }

  if (id == '6.ee.a.3_2')
        {
                return new i_6_ee_a_3__2(this.mSheet);
        }
  if (id == '6.ee.a.3_3')
        {
                return new i_6_ee_a_3__3(this.mSheet);
        }
  if (id == '6.ee.a.3_4')
        {
                return new i_6_ee_a_3__4(this.mSheet);
        }
  if (id == '6.ee.a.3_5')
        {
                return new i_6_ee_a_3__5(this.mSheet);
        }
  if (id == '6.ee.a.3_6')
        {
                return new i_6_ee_a_3__6(this.mSheet);
        }
 
  if (id == '6.ee.b.5_1')
        {
                return new i_6_ee_b_5__1(this.mSheet);
        }
  if (id == '6.ee.b.5_2')
        {
                return new i_6_ee_b_5__2(this.mSheet);
        }
  if (id == '6.ee.b.5_3')
        {
                return new i_6_ee_b_5__3(this.mSheet);
        }
  if (id == '6.ee.b.5_4')
        {
                return new i_6_ee_b_5__4(this.mSheet);
        }
  if (id == '6.ee.b.5_5')
        {
                return new i_6_ee_b_5__5(this.mSheet);
        }
  if (id == '6.ee.b.5_6')
        {
                return new i_6_ee_b_5__6(this.mSheet);
        }
  if (id == '6.ee.a.5_7')
        {
                return new i_6_ee_b_5__7(this.mSheet);
        }
  if (id == '6.ee.b.6_1')
        {
                return new i_6_ee_b_6__1(this.mSheet);
        }
  if (id == '6.ee.b.6_2')
        {
                return new i_6_ee_b_6__2(this.mSheet);
        }
  if (id == '6.ee.b.7_1')
        {
                return new i_6_ee_b_7__1(this.mSheet);
        }
  if (id == '6.ee.b.7_2')
        {
                return new i_6_ee_b_7__2(this.mSheet);
        }
  if (id == '6.ee.b.7_3')
        {
                return new i_6_ee_b_7__3(this.mSheet);
        }
  if (id == '6.ee.b.7_4')
        {
                return new i_6_ee_b_7__4(this.mSheet);
        }
  if (id == '6.ee.b.7_5')
        {
                return new i_6_ee_b_7__5(this.mSheet);
        }
  if (id == '6.ee.b.7_6')
        {
                return new i_6_ee_b_7__6(this.mSheet);
        }
  if (id == '6.ee.b.7_7')
        {
                return new i_6_ee_b_7__7(this.mSheet);
        }
  if (id == '6.ee.b.7_8')
        {
                return new i_6_ee_b_7__8(this.mSheet);
        }
  if (id == '6.ee.b.7_9')
        {
                return new i_6_ee_b_7__9(this.mSheet);
        }

  if (id == '6.ee.b.7_10')
        {
                return new i_6_ee_b_7__10(this.mSheet);
        }
  if (id == '6.ee.b.7_11')
        {
                return new i_6_ee_b_7__11(this.mSheet);
        }
  if (id == '6.ee.b.7_12')
        {
                return new i_6_ee_b_7__12(this.mSheet);
        }
  if (id == '6.ee.b.7_13')
        {
                return new i_6_ee_b_7__13(this.mSheet);
        }

  if (id == '6.ee.b.8_1')
        {
                return new i_6_ee_b_8__1(this.mSheet);
        }
  if (id == '6.ee.b.8_2')
        {
                return new i_6_ee_b_8__2(this.mSheet);
        }
  if (id == '6.ee.b.8_3')
        {
                return new i_6_ee_b_8__3(this.mSheet);
        }
   if (id == '6.ee.b.8_4')
        {
                return new i_6_ee_b_8__4(this.mSheet);
        }

  if (id == '6.ee.c.9_1')
        {
                return new i_6_ee_c_9__1(this.mSheet);
        }
  if (id == '6.ee.c.9_2')
        {
                return new i_6_ee_c_9__2(this.mSheet);
        }
  if (id == '6.ee.c.9_3')
        {
                return new i_6_ee_c_9__3(this.mSheet);
        }
  if (id == '6.ee.c.9_4')
        {
                return new i_6_ee_c_9__4(this.mSheet);
        }  
  if (id == '6.ee.c.9_5')
        {
                return new i_6_ee_c_9__5(this.mSheet);
        }  
  if (id == '6.ee.c.9_6')
        {
                return new i_6_ee_c_9__6(this.mSheet);
        }  
  if (id == '6.ee.c.9_7')
        {
                return new i_6_ee_c_9__7(this.mSheet);
        }  
  if (id == '6.ee.c.9_8')
        {
                return new i_6_ee_c_9__8(this.mSheet);
        }  

  if (id == '6.g.a.1_1')
        {
                return new i_6_g_a_1__1(this.mSheet);
        }  
  if (id == '6.g.a.1_2')
        {
                return new i_6_g_a_1__2(this.mSheet);
        }  

  if (id == '6.g.a.2_1')
        {
                return new i_6_g_a_2__1(this.mSheet);
        }  
  if (id == '6.g.a.2_2')
        {
                return new i_6_g_a_2__2(this.mSheet);
        }  
  if (id == '6.g.a.2_3')
        {
                return new i_6_g_a_2__3(this.mSheet);
        }  
  if (id == '6.g.a.2_4')
        {
                return new i_6_g_a_2__4(this.mSheet);
        }  
  if (id == '6.g.a.2_5')
        {
                return new i_6_g_a_2__5(this.mSheet);
        }  


	return 0;	
}

  

		
});

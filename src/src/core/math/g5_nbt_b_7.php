/*
.xx .x000 t24 
.xx x.000 t25 
x.x x.000 t26 
x.x .x000 t27  
xx. .x000 t28 
xx. x.000 t29 
----------------------
.xx x.x00 t30  
.xx xx.00 t31 
x.x xx.00 t32  
x.x x.x00 t33  
xx. x.x00 t34  
xx. xx.00 t35 
-------------------
.xx x.xx0 t36  
.xx xx.x0 t37  
x.x xx.x0 t38  
x.x x.xx0 t39  
xx. x.xx0 t40 
xx. xx.x0 t41  
-------------------
.xx x.xxx t42 
.xx xx.xx t43 
x.x xx.xx t44  
x.x x.xxx t45  
xx. x.xxx t46 
xx. xx.xx t47 
-------------------
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_47',5.1147,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__47 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_47';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. xx.xx 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		//y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 1; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_46',5.1146,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__46 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_46';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. x.xxx t46 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		//y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 1; 

	z = z / 1000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_45',5.1145,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__45 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_45';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x x.xxx t45  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		//y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 10; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_44',5.1144,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__44 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_44';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x xx.xx t44  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 10; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_43',5.1143,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__43 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_43';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx xx.xx t43 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 100; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_42',5.1142,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__42 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_42';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx x.xxx t42 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*8990)+1000);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 10000;

	x = x / 100; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_41',5.1141,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__41 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_41';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. xx.x0 t41  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 1; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_40',5.1140,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__40 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_40';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. x.xx0 t40 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 1; 

	z = z / 1000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_39',5.1139,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__39 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_39';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x x.xx0 t39  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 10; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_38',5.1138,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__38 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_38';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x xx.x0 t38  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 10; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_37',5.1137,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__37 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_37';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx xx.x0 t37  


        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 100; 

	z = z;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_36',5.1136,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__36 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_36';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx x.xx0 t36  


        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 100 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*890)+100);
		y = y * 10;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 100; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_35',5.1135,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__35 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_35';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. x.x00 t34  
	//xx. xx.00 t35 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 1; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_34',5.1134,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__34 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_34';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x x.x00 t33  
	//xx. x.x00 t34  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 1; 

	z = z / 1000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_33',5.1133,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__33 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_33';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//x.x xx.00 t32  
	//x.x x.x00 t33  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 10; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_32',5.1132,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__32 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_32';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx xx.00 t31 
	//x.x xx.00 t32  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 10; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_31',5.1131,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__31 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_31';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//.xx x.x00 t30  
	//.xx xx.00 t31 

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 100;

	x = x / 100; 

	z = z / 1;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_30',5.1130,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__30 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_30';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;

	//xx. x.000 t29 
	//.xx x.x00 t30  

        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0 || y % 1000 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*90)+10);
		y = y * 100;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 100; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_29',5.1129,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__29 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_29';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


	//xx. .x000 t28 
	//xx. x.000 t29 

        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 1; 

	z = z / 1000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_28',5.1128,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__28 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_28';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


	//xx. .x000 t28 

        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 10000;

	x = x / 1; 

	z = z / 10000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_27',5.1127,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__27 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
	//x.x .x000   

        this.mType = '5.nbt.b.7_27';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 10000;

	x = x / 10; 

	z = z / 1000;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_26',5.1126,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__26 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
	//x.x .x000   

        this.mType = '5.nbt.b.7_26';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0 || x % 10 == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 10; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_25',5.1125,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__25 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
	//.xx x.000 
	//x     y

        this.mType = '5.nbt.b.7_25';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;

	x = x / 100; 

	z = z / 10;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_24',5.1124,'5.nbt.b.7','');
*/

var i_5_nbt_b_7__24 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
	//.xx .x000 add 3 zeroes house   

        this.mType = '5.nbt.b.7_24';

        this.ns = new NameSampler();
        var a = 0;

	var b = 0;
        var c = 0;

        var d = 0;
        var e = 0;
        var f = 0;
        var x = 0;
        var y = 0;
        var z = 0;
	var r = 1;


        //while(z < 1000 || z > 9999 || z%100 != 0)
        while(y % x != 0 || z < 99 || r == 0)
        {
                x = Math.floor((Math.random()*90)+10);
                y = Math.floor((Math.random()*9)+1);
		y = y * 1000;
		z = parseInt(y / x);      
		r = parseInt(z%10);	 
	}                

	y = y / 1000;
	y = y / 10;

	x = x / 100; 

	z = z / 100;

        this.setQuestion('Find the Quotient: ' + y + ' &divide ' + x);
        this.setAnswer('' + z,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_23',5.1123,'5.nbt.b.7','Terra Nova 41');
*/
var i_5_nbt_b_7__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
        this.ns = new NameSampler();

        this.mType = '5.nbt.b.7_23';
 
	var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
       	var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*8+2);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' chip in to buy ' + b + ' pounds of ' + this.ns.mFruitOne + ' for their ' + this.ns.mPlayedActivityOne + ' team. The ' + this.ns.mFruitOne + ' cost $' + decimalA.getMoney() + ' a pound. How much do they spend on ' + this.ns.mFruitOne + ' ' + this.ns.mSum + '?');

        this.setAnswer('' + '$' + answer.getMoney(),0);
        this.setAnswer('' + answer.getMoney(),1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_22',5.1122,'5.nbt.b.7','Terra Nova 37');
*/

var i_5_nbt_b_7__22 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
        this.mType = '5.nbt.b.7_22';
       	this.mChopWhiteSpace = false;
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

	this.mQuestionLabel.setSize(200,200);
        this.mQuestionLabel.setPosition(500,150);

	this.mAnswerTextBox.setSize(100,50);
        this.mAnswerTextBox.setPosition(425,300);

	this.mUserAnswerLabel.setPosition(150,300);

	this.answer = '';

       	this.a = Math.floor(Math.random()*8)+2;
       	this.b = Math.floor(Math.random()*8)+2;
       	this.c = Math.floor(Math.random()*8)+2;
       	this.aa = Math.floor(Math.random()*89)+10;
       	this.bb = Math.floor(Math.random()*89)+10;
       	this.cc = Math.floor(Math.random()*89)+10;
	
	this.x = new Decimal(this.a + '.' + this.aa); 
	this.y = new Decimal(this.b + '.' + this.bb); 
	this.z = new Decimal(this.c + '.' + this.cc); 
	
	var d = this.x.add(this.y);
	this.answer = d.add(this.z);

        this.setQuestion('' + this.ns.mNameOne + ' spent $'  + this.x.getMoney() + ' on fruit. $' + this.y.getMoney() + ' on vegetables and $' + this.z.getMoney() + ' on other stuff. How much did ' + this.ns.mNameOne + ' spend ' + this.mNameMachine.getSum() + '?');

        this.setAnswer('$' + this.answer.getMoney(),0);
        this.setAnswer('' + this.answer.getMoney(),1);
	
	this.mHeading = new Shape(200,50,30,50,this,"","","");
 	this.mShapeArray.push(this.mHeading);
	this.mHeading.setText('Shopping List');

	this.mTable = new Shape(200,50,30,100,this,"TABLE","","");
 	this.mShapeArray.push(this.mTable);

	//row 0
	var r0 = this.mTable.mMesh.insertRow(0);

	var c0a = r0.insertCell(0);
	var c0b = r0.insertCell(1);

	c0a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c0b.innerHTML = '' + this.ns.mVegetableOne;

	//row1 
	var r1 = this.mTable.mMesh.insertRow(1);

	var c1a = r1.insertCell(0);
	var c1b = r1.insertCell(1);

	c1a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c1b.innerHTML = '' + this.ns.mVegetableTwo;
	
	//row2
	var r2 = this.mTable.mMesh.insertRow(2);

	var c2a = r2.insertCell(0);
	var c2b = r2.insertCell(1);

	c2a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c2b.innerHTML = '' + this.ns.mVegetableThree;
	
	//row3
	var r3 = this.mTable.mMesh.insertRow(3);

	var c3a = r3.insertCell(0);
	var c3b = r3.insertCell(1);

	c3a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c3b.innerHTML = '' + this.ns.mFruitOne;
	
	//row4
	var r4 = this.mTable.mMesh.insertRow(4);

	var c4a = r4.insertCell(0);
	var c4b = r4.insertCell(1);

	c4a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c4b.innerHTML = '' + this.ns.mFruitTwo;
	
	//row5
	var r5 = this.mTable.mMesh.insertRow(5);

	var c5a = r5.insertCell(0);
	var c5b = r5.insertCell(1);

	c5a.innerHTML = parseInt(Math.floor(Math.random()*10)+1);
	c5b.innerHTML = '' + this.ns.mPurchaseOne;
	
	//table specs
	this.mTable.mMesh.style.width = '100%';
    	this.mTable.mMesh.setAttribute('border', '1');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_21',5.1121,'5.nbt.b.7','Terra Nova 8');
*/

var i_5_nbt_b_7__21 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nbt.b.7_21';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();


                this.a = 1;
                this.b = 2;
                this.aa = 2;
                this.bb = 1;
		this.answer = '';

                while (this.a <= this.b || this.aa >= this.bb)
                {
                	this.a = Math.floor(Math.random()*8)+2;
                	this.b = Math.floor(Math.random()*8)+2;
                	this.aa = Math.floor(Math.random()*89)+10;
                	this.bb = Math.floor(Math.random()*89)+10;
		}
		this.x = new Decimal(this.a + '.' + this.aa); 
		this.y = new Decimal(this.b + '.' + this.bb); 

                this.setQuestion('' + '$' + this.x.getMoney() + ' - ' + this.y.getMoney() );
		this.z = this.x.subtract(this.y);
		this.one = new Decimal(1);
		this.answerB = this.z.subtract(this.one);
		this.answerC = this.z.add(this.one);
                	
		this.r = Math.floor(Math.random()*4);

		if (parseInt(this.r) == 0)
		{
                	this.answer = '' + 'None of these';
                	this.setAnswer('' + this.answer,0);
                	this.mButtonA.setAnswer('' + this.answer);
			this.mButtonD.setAnswer('' + parseInt(this.a - this.b) + '.' + parseInt(this.bb - this.aa));  
		}
		else
		{	
                	this.answer = '' + '$' + this.z.getMoney();
                	this.setAnswer('' + this.answer,0);
                	this.mButtonA.setAnswer('' + this.answer);
                	this.mButtonD.setAnswer('' + 'None of these');
		}

                this.mButtonB.setAnswer('' + '$' + this.answerB.getMoney());
                this.mButtonC.setAnswer('' + '$' + this.answerC.getMoney());
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_20',5.1120,'5.nbt.b.7','Terra Nova 3');
*/
var i_5_nbt_b_7__20 = new Class(
{
Extends: FourButtonItem, 

initialize: function(sheet)
{
        this.parent(sheet);
 	this.mChopWhiteSpace = false;

        this.mType = '5.nbt.b.7_20';

        var aOnes = Math.floor(Math.random()*9+1);
        var aHundredths = Math.floor(Math.random()*9+1);
	var a = '' + aOnes + '.' + aHundredths; 			 
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        //b = parseFloat(b / 10);
        //var decimalB = new Decimal(b);
	var decimalB = new Decimal(b);
	
        var r = Math.floor(Math.random()*4);
	this.answer = '';
	if (r == 0)
	{
		this.answer = '' + 'None of these';
	}
	else
	{
        	this.answerDecimal = decimalA.multiply(decimalB);
        	this.answer = this.answerDecimal.getString();
	}
       	decimalAnswer = decimalA.multiply(decimalB);

  	this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());
        this.setAnswer('' + this.answer,0);

	var decimalOne = new Decimal(1);
	var answerB = decimalAnswer.subtract(decimalOne);  
	
	var decimalTen = new Decimal(10);
	var answerC = decimalAnswer.subtract(decimalTen);  
	
	var decimalFive = new Decimal(5);
	var answerD = decimalAnswer.subtract(decimalFive);  

	this.mButtonA.setAnswer('' + this.answer);
	this.mButtonB.setAnswer('' + answerB.getString());
	this.mButtonC.setAnswer('' + answerC.getString());
	this.mButtonD.setAnswer('' + answerD.getString());
        this.shuffle(10);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_19',5.1119,'5.nbt.b.7','5.55/0.55');
*/
var i_5_nbt_b_7__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_19';

        var decimalC = new Decimal('123456');
        var decimalB = new Decimal('123456');

        var compareC = 0;
        var compareB = 0;

        //might need be bigger compare
        while(decimalB.mNumber.length != compareB || parseFloat(decimalB.mDecimal) >= 1 || decimalC.mNumber.length != compareC || parseFloat(decimalC.mDecimal) <= 1 || parseFloat(decimalC.mDecimal >= 10) )
        {
                var a = Math.floor(Math.random()*899+100);
                a = parseFloat(a / 100);
                var decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);

                decimalC = decimalA.multiply(decimalB);

                //lets update compare
                if (decimalC.mDecimalPlace == -1)
                {
                        compareC = 3;
                }
                else
                {
                        compareC = 4;
                }

                //lets update compare
                if (decimalB.mDecimalPlace == -1)
                {
                        compareB = 2;
                }
                else
                {
                        compareB = 3;
                }

                this.setQuestion('Find the quotient: ' + decimalC.getString() + ' &divide ' + decimalB.getString());
                this.setAnswer('' + decimalA.getString(),0);
        }

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_18',5.1118,'5.nbt.b.7','5.55/0.55');
*/
var i_5_nbt_b_7__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_18';

        var decimalC = new Decimal('123456');
        var decimalB = new Decimal('123456');

        var compareC = 0;
        var compareB = 0;

        //might need be bigger compare
        while(decimalB.mNumber.length != compareB || parseFloat(decimalB.mDecimal) >= 1 || decimalC.mNumber.length != compareC || parseFloat(decimalC.mDecimal) <= 1 || parseFloat(decimalC.mDecimal >= 10) )
        {
                var a = Math.floor(Math.random()*899+100);
                a = parseFloat(a / 100);
                var decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);

                decimalC = decimalA.multiply(decimalB);

                //lets update compare
                if (decimalC.mDecimalPlace == -1)
                {
                        compareC = 2;
                }
                else
                {
                        compareC = 3;
                }

                //lets update compare
                if (decimalB.mDecimalPlace == -1)
                {
                        compareB = 2;
                }
                else
                {
                        compareB = 3;
                }

                this.setQuestion('Find the quotient: ' + decimalC.getString() + ' &divide ' + decimalB.getString());
                this.setAnswer('' + decimalA.getString(),0);
        }
	
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_17',5.1117,'5.nbt.b.7','5.5/0.55');
*/
var i_5_nbt_b_7__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_17';

        var decimalC = new Decimal('123456');
        var decimalB = new Decimal('123456');

        var compareC = 0;
        var compareB = 0;

        //might need be bigger compare
        while(decimalC.mNumber.length >= compareC || compareB != 4 || parseFloat(decimalC.mDecimal) <= 1 || parseFloat(decimalC.mDecimal >= 10) )
        {
                var a = Math.floor(Math.random()*89+10);
                a = parseFloat(a / 10);
                var decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);

                decimalC = decimalA.multiply(decimalB);

                //lets update compare
                if (decimalC.mDecimalPlace == -1)
                {
                        compareC = 2;
                }
                else
                {
                        compareC = 3;
                }
                var temp = decimalB.mDecimal.toString();
                compareB = temp.length;

                this.setQuestion('Find the quotient: ' + decimalC.getString() + ' &divide ' + decimalB.getString());
                this.setAnswer('' + decimalA.getString(),0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_16',5.1116,'5.nbt.b.7','5.55/5.5');
*/
var i_5_nbt_b_7__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_16';

	var decimalC = new Decimal('123456');
	var decimalB = new Decimal('123456');
	
	var compareC = 0;
	var compareB = 0;

	//might need be bigger compare
	while(decimalC.mNumber.length >= compareC || compareB < 3 || parseFloat(decimalC.mDecimal) <= 1 || parseFloat(decimalC.mDecimal) >= 10)  
	{
        	var a = Math.floor(Math.random()*899+100);
        	a = parseFloat(a / 100);
        	var decimalA = new Decimal(a);

        	var b = Math.floor(Math.random()*89+10);
       	 	b = parseFloat(b / 10);
        	decimalB = new Decimal(b);

        	decimalC = decimalA.multiply(decimalB);

		//lets update compare	
		if (decimalC.mDecimalPlace == -1)
		{
			compareC = 3;
		}
		else
		{
			compareC = 4;
		}
		var temp = decimalB.mDecimal.toString();
		compareB = temp.length;
		
       	 	this.setQuestion('Find the quotient: ' + decimalC.getString() + ' &divide ' + decimalB.getString());
        	this.setAnswer('' + decimalA.getString(),0);
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_15',5.1115,'5.nbt.b.7','0.55/0.5');
*/
var i_5_nbt_b_7__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_15';

        var decimalC = new Decimal('123456');
        var decimalB = new Decimal('123456');

        var compareC = 0;
        var compareB = 0;

        //might need be bigger compare
        //while(decimalC.mNumber.length >= compareC || compareB < 3 || parseFloat(decimalC.mDecimal) <= 1 || parseFloat(decimalC.mDecimal) >= 10)
        while(decimalC.mNumber.length != compareC || parseFloat(decimalC.mDecimal) >= 1)
        {
                var a = Math.floor(Math.random()*89+10);
                a = parseFloat(a / 100);
                var decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*9+1);
                b = parseFloat(b / 10);
                decimalB = new Decimal(b);

                decimalC = decimalA.multiply(decimalB);

                //lets update compare
                if (decimalC.mDecimalPlace == -1)
                {
                        compareC = 2;
                }
                else
                {
                        compareC = 3;
                }
                var temp = decimalB.mDecimal.toString();
                compareB = temp.length;

                this.setQuestion('Find the quotient: ' + decimalC.getString() + ' &divide ' + decimalB.getString());
                this.setAnswer('' + decimalA.getString(),0);
        }

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_14',5.1114,'5.nbt.b.7','5.55x5.55');
*/
var i_5_nbt_b_7__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_14';

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*899+100);
        b = parseFloat(b / 100);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);

}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_13',5.1113,'5.nbt.b.7','5.55x5.5');
*/
var i_5_nbt_b_7__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_13';

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_12',5.1112,'5.nbt.b.7','5.5x0.55');
*/
var i_5_nbt_b_7__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_12';

        var a = Math.floor(Math.random()*89+10);
        a = parseFloat(a / 10);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 100);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_11',5.1111,'5.nbt.b.7','5.55x5.5');
*/
var i_5_nbt_b_7__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_11';

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_10',5.1110,'5.nbt.b.7','0.55x0.5');
*/
var i_5_nbt_b_7__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_10';

        var a = Math.floor(Math.random()*99+1);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*9+1);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' &times ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_9',5.1109,'5.nbt.b.7','x.xx-x.x');
*/
var i_5_nbt_b_7__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_9';
        this.ns = new NameSampler();

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                var a = Math.floor(Math.random()*899+100);
                a = parseFloat(a / 100);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 10);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('' + this.ns.mNameOne + ' ran a race in ' + decimalA.getString() + ' seconds on Friday. Then on Saturday ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' ran the same race ' + decimalB.getString() + ' seconds faster. What was ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' time on Saturday?');

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_8',5.1108,'5.nbt.b.7','x.x-0.xx');
*/
var i_5_nbt_b_7__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_8';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                var a = Math.floor(Math.random()*89+10);
                a = parseFloat(a / 10);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_7',5.1107,'5.nbt.b.7','xx.xx-x.x');
*/
var i_5_nbt_b_7__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_7';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                var a = Math.floor(Math.random()*8999+1000);
                a = parseFloat(a / 100);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*89+10);
                b = parseFloat(b / 10);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_6',5.1106,'5.nbt.b.7','0.xx-0.x');
*/
var i_5_nbt_b_7__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_6';

	var decimalA = new Decimal(1);
	var decimalB = new Decimal(2);
	while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
	{
        	var a = Math.floor(Math.random()*89+10);
        	a = parseFloat(a / 100);
        	decimalA = new Decimal(a);

        	var b = Math.floor(Math.random()*9+1);
        	b = parseFloat(b / 10);
        	decimalB = new Decimal(b);
	}

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_5',5.1105,'5.nbt.b.7','xx.xx+x.xx');
*/
var i_5_nbt_b_7__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_5';

        this.ns = new NameSampler();

	var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

	this.setQuestion('Last year ' + this.ns.mNameOne + ' was ' + decimalA.getString() + ' inches tall. This year ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' grew ' + decimalB.getString() + ' inches so far. How many inches tall is ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' now?');

        this.setAnswer('' + answer.getString(),0);
        this.setAnswer('' + answer.getString() + ' inches',1);
        this.setAnswer('' + answer.getString() + ' in.',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_4',5.1104,'5.nbt.b.7','x.xx+x.x');
*/
var i_5_nbt_b_7__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_4';
	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var twosides = decimalA.add(decimalB);
	
	var answer = twosides.add(twosides);
        
	this.setQuestion('In a video game called minetest ' + this.ns.mNameOne + ' builds a rectangular fenced in yard for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mAnimalOne + '. If the length of the yard is ' + decimalA.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' and the width of the yard is ' + decimalB.getString() + ' ' + this.ns.mDistanceIncrementMedium + ' then what is the perimeter of the yard?');

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_3',5.1103,'5.nbt.b.7','x.x+0.xx');
*/
var i_5_nbt_b_7__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_3';

        var a = Math.floor(Math.random()*89+10);
        a = parseFloat(a / 10);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 100);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_2',5.1102,'5.nbt.b.7','x.xx+x.x');
*/
var i_5_nbt_b_7__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_2';

        var a = Math.floor(Math.random()*899+100);
        a = parseFloat(a / 100);
        var decimalA = new Decimal(a);

        var b = Math.floor(Math.random()*89+10);
        b = parseFloat(b / 10);
        var decimalB = new Decimal(b);

        var answer = decimalA.add(decimalB);

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.7_1',5.1101,'5.nbt.b.7','0.xx+0.x');
*/
var i_5_nbt_b_7__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.7_1';

        var a = Math.floor(Math.random()*99+1);
	a = parseFloat(a / 100);
	var decimalA = new Decimal(a);	

        var b = Math.floor(Math.random()*9+1);
	b = parseFloat(b / 10);
	var decimalB = new Decimal(b);	

	var answer = decimalA.add(decimalB);  

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString());

        this.setAnswer('' + answer.getString(),0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_10',1.0210,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_10';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }
        this.setQuestion('' + this.ns.mNameOne + ' used ' + this.a + ' pages in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mSubjectOne + ' notebook, ' + this.b + ' pages in ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mSubjectTwo + ' notebook and ' + this.c + ' pages in ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mSubjectThree + ' notebook. How many pages did ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' use ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_9',1.0209,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_9';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }
	this.setQuestion('' + 'While playing ' + this.ns.mPointActivityOne + ' ' + this.ns.mNameOne + ' scored ' + this.a + ' points, ' + this.ns.mNameTwo + ' scored ' + this.b + ' points and ' + this.ns.mNameThree + ' scored ' + this.c + ' points. How many points did they score ' + this.ns.mSum + '?');       
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_8',1.0208,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_8';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }
	this.setQuestion('' + this.ns.mNameOne + ' was at a picnic with some family members. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' ' + this.ns.mFamilyOne + ' ate ' + this.a + ' ' + this.ns.mFruitOne + ', ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyTwo + ' ate ' + this.b + ' ' + this.ns.mFruitTwo + ' and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyThree + ' ate ' + this.c + ' ' + this.ns.mFruitThree + '. How many pieces of fruit did his family eat ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_7',1.0207,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_7';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }

        this.setQuestion('' + 'This week ' + this.ns.mNameOne + ' ate ' + this.a + ' ' + this.ns.mFruitOne + ', ' + this.b + ' ' + this.ns.mFruitTwo + ' and ' + this.c + ' ' + this.ns.mFruitThree + '. How many pieces of fruit did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' eat ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_6',1.0206,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_6';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }

        this.setQuestion('' + 'In ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' house ' + this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mVegetableOne + ', ' + this.b + ' ' + this.ns.mVegetableTwo + ' and ' + this.c + ' ' + this.ns.mVegetableThree + '. How many vegetables does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_5',1.0205,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_5';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }

        this.setQuestion('' + 'At a party ' + this.ns.mNameOne + ' and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friends drank ' + this.a + ' glasses of ' + this.ns.mDrinkOne + ', ' + this.b + ' glasses of ' + this.ns.mDrinkTwo + ' and ' + this.c + ' glasses of ' + this.ns.mDrinkThree + '. How many glasses did they drink ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_4',1.0204,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_4';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
        this.d = 99;
        while(this.d > 20)
        {
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.d = parseInt(this.a + this.b + this.c);
        }

        this.setQuestion('' + 'At the zoo' + ' ' + this.ns.mNameOne + ' counted ' + this.a + ' ' + this.ns.mAnimalOne + ', ' + this.b + ' ' + this.ns.mAnimalTwo + ' and ' + this.c + ' ' + this.ns.mAnimalThree + '. How many animals did ' + this.ns.mNameOne + ' count ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_3',1.0203,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_3';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
	this.d = 99; 
	while(this.d > 20)
	{
        	this.a = Math.floor(Math.random()*8)+2;
        	this.b = Math.floor(Math.random()*8)+2;
        	this.c = Math.floor(Math.random()*8)+2;
        	this.d = parseInt(this.a + this.b + this.c);
	}

        this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' minutes, ' + this.ns.mNameTwo + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' minutes and ' + this.ns.mNameThree + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.c + ' minutes. How many minutes did the play ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_2',1.0202,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_2';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
	this.d = 99; 
	while(this.d > 20)
	{
        	this.a = Math.floor(Math.random()*8)+2;
        	this.b = Math.floor(Math.random()*8)+2;
        	this.c = Math.floor(Math.random()*8)+2;
        	this.d = parseInt(this.a + this.b + this.c);
	}

        this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mColorOne + ' crayons, ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mColorTwo + ' crayons and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mColorThree + ' crayons. How many crayons do they have ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.2_1',1.0201,'1.oa.a.2','add 3 within 20' );
*/

var i_1_oa_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '1.oa.a.2_1';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        //variables
        this.a = 0;
        this.b = 0;
        this.c = 0;
	this.d = 99; 
	while(this.d > 20)
	{
        	this.a = Math.floor(Math.random()*8)+2;
        	this.b = Math.floor(Math.random()*8)+2;
        	this.c = Math.floor(Math.random()*8)+2;
        	this.d = parseInt(this.a + this.b + this.c);
	}

        this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThingOne + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThingOne + ' and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mThingOne + '. How many ' + this.ns.mThingOne + ' do they have ' + this.ns.mSum + '?');
        this.setAnswer('' + this.d,0);
}
});


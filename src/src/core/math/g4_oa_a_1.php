
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_4',4.0104,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication equation as a comparison. ' );
*/

var i_4_oa_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_4';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.a + '*' + this.b + '=' + this.c + ' means that ' + this.c + ' is ' + this.b + ' times greater than what number?');
                this.setAnswer(this.a ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_3',4.0103,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication equation as a comparison. ' );
*/

var i_4_oa_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_3';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.a + '*' + this.b + '=' + this.c + ' means that ' + this.c + ' is ' + this.a + ' times greater than what number?');
                this.setAnswer(this.b ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_2',4.0102,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication comparison. ' );
*/

var i_4_oa_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.c + '=' + this.a + '*' + this.b + ' means that ' + this.c + ' is ' + this.b + ' times greater than what number?');
                this.setAnswer(this.a,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_1',4.0101,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication comparison. ' );
*/

var i_4_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);

               	//variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
	
		this.setQuestion('The equation: ' + this.c + '=' + this.a + '*' + this.b + ' means that ' + this.c + ' is ' + this.a + ' times greater than what number?');			 
                this.setAnswer(this.b ,0);
        }
});





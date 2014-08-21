
/*
prerequisites:
none finished
*/

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
		//this.mUserAnswerLabel.setPosition(125,200);
		//this.mCorrectAnswerLabel.setPosition(425,200);

               	//variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
	
		this.setQuestion('The equation: ' + this.c + '=' + this.a + '*' + this.b + ' means that ' + this.c + ' is ' + this.a + ' times greater than what number?');			 
                this.setAnswer(this.b ,0);
        }
});

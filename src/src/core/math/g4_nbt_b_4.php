
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_1',4.0901,'4.nbt.b.4','adding numbers up to 6 digits');
*/

var i_4_nbt_b_4__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.4_1';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
	
				// pick number of digits (2 - 6)
				rand = 3 + Math.floor((Math.random()*2));

				// get end number based on digits
				end = Math.pow(10, rand);
				// get start number based on digits
				start = Math.pow(10, rand-1);

				// pick number from start to end range
				varA = start + Math.floor(Math.random()*(end-start));

				rand = 3 + Math.floor((Math.random()*2));

				end = Math.pow(10, rand);
				start = Math.pow(10, rand-1);
		
				varB = start + Math.floor(Math.random()*(end-start));
		
				varC = parseInt(varA + varB);
			                       
				this.setQuestion('' + varA + ' + ' +  varB + ' = ');
            this.setAnswer('' + varC,0);

				this.mQuestionLabel.setPosition(330, 120);
				this.mQuestionLabel.setSize(200, 100);      
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_2',4.0902,'4.nbt.b.4','subtracting numbers up to 6 digits');
*/

var i_4_nbt_b_4__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.4_2';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;
				var big = 0;
				var small = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
	
				
				rand = 3 + Math.floor((Math.random()*2));

				start = Math.pow(10, rand-1);

				end = Math.pow(10, rand);
				
				varA = start + Math.floor(Math.random()*(end-start));	

				rand = 3 + Math.floor((Math.random()*2));

				start = Math.pow(10, rand-1);
				end = Math.pow(10, rand);
	
				varB = start + Math.floor(Math.random()*(end-start));

				if (varA > varB)
				{
					big = varA;
					small = varB;
				}
				else
				{
					big = varB;
					small = varA;
				}

				varC = parseInt(big - small);

			                       
				this.setQuestion('' + big + ' - ' +  small + ' = ');
            this.setAnswer('' + varC,0);    

				this.mQuestionLabel.setPosition(330, 120);
				this.mQuestionLabel.setSize(200, 100);               
        }
});

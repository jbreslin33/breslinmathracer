/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_1',4.1001,'4.nbt.b.5','multiply numbers up to 2 digits');
*/

var i_4_nbt_b_5__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.5_1';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
		
			// get start number based on 2 digits
			start = 10;

			// get end number based on 2 digits
			end = 100;

			// pick 1st number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));		

			// pick 2nd number from start to end range
			varB = start + Math.floor(Math.random()*(end-start));		
				
			varC = parseInt(varA * varB);
								                       
				this.setQuestion('' + varA + ' * ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_2',4.1002,'4.nbt.b.5','multiply numbers up to 4 digits');
*/

var i_4_nbt_b_5__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
            this.parent(sheet);
            this.mType = '4.nbt.b.5_2';          	

				var varA = 0;
				var varB = 0;
				var varC = 0;

				var start = 0;
				var end = 0;
				var rand = 0;
		
			// pick number of digits (1 - 4)
			rand = 1 + Math.floor((Math.random()*4));

			// get start number based on digits
			start = Math.pow(10, rand-1);

			// get end number based on digits
			end = Math.pow(10, rand);

			// pick number from start to end range
			varA = start + Math.floor(Math.random()*(end-start));	

			// pick one digit number
			varB = 2 + Math.floor(Math.random()*8);	
				
			varC = parseInt(varA * varB);
											                       
				this.setQuestion('' + varA + ' * ' +  varB + ' = ');
            this.setAnswer(varC,0);             
        }
});

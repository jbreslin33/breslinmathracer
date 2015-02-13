
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_6',4.2806,'4.md.a.3','calculate perimeter of a rectangle (non-square)');
*/

var i_4_md_a_3__6 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_6';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(2*(varA + varB));

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the perimeter of a rectangle that has a length of ' + length +  ' ' + this.units + ' and a width of ' + width + ' ' + this.units + '?');
            this.setAnswer('' + varC,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_7',4.2807,'4.md.a.3','calculate perimeter of a square');
*/

var i_4_md_a_3__7 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_7';   
				
				this.units = '';       	
				var varA = 0;
				var varC = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);
				
			varC = parseInt(4 * varA);

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the perimeter of a square that has sides ' + varA +  ' ' + this.units + ' in lenth?');
            this.setAnswer('' + varC,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_8',4.2808,'4.md.a.3','calculate side of a square given perimeter');
*/

var i_4_md_a_3__8 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_8';   
				
				this.units = '';       	
				var varA = 0;
				var varC = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);
				
			varC = parseInt(4 * varA);

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the length of a side of a square that has a perimeter of ' + varC +  ' ' + this.units + ' ?');
            this.setAnswer('' + varA,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_9',4.2809,'4.md.a.3','calculate length of a rectangle (non-square) given width and perimeter');
*/

var i_4_md_a_3__9 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_9';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(2*(varA + varB));

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the length of a rectangle that has a width of ' + width +  ' ' + this.units + ' and a perimeter of ' + varC + ' ' + this.units + '?');
            this.setAnswer('' + length,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_10',4.2810,'4.md.a.3','calculate width of a rectangle (non-square) given length and perimeter');
*/

var i_4_md_a_3__10 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_10';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(2*(varA + varB));

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the width of a rectangle that has a length of ' + length +  ' ' + this.units + ' and a perimeter of ' + varC + ' ' + this.units + '?');
            this.setAnswer('' + width,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_1',4.2801,'4.md.a.3','calculate area of a rectangle (non-square)');
*/

var i_4_md_a_3__1 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_1';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(varA * varB);

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the area of a rectangle that has a length of ' + length +  ' ' + this.units + ' and a width of ' + width + ' ' + this.units + '?');
            this.setAnswer('' + varC,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(' square ' +  this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_2',4.2802,'4.md.a.3','calculate area of a square');
*/

var i_4_md_a_3__2 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_2';   
				
				this.units = '';       	
				var varA = 0;
				var varC = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);
				
			varC = parseInt(varA * varA);

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the area of a square that has sides ' + varA +  ' ' + this.units + ' in lenth?');
            this.setAnswer('' + varC,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(' square ' +  this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_5',4.2805,'4.md.a.3','calculate side of a square given area');
*/

var i_4_md_a_3__5 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_5';   
				
				this.units = '';       	
				var varA = 0;
				var varC = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);
				
			varC = parseInt(varA * varA);

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the length of a side of a square that has an area of ' + varC +  ' square ' + this.units + ' ?');
            this.setAnswer('' + varA,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_3',4.2803,'4.md.a.3','calculate length of a rectangle (non-square) given width and area');
*/

var i_4_md_a_3__3 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_3';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(varA * varB);

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the length of a rectangle that has a width of ' + width +  ' ' + this.units + ' and an area of ' + varC + ' square ' + this.units + '?');
            this.setAnswer('' + varB,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_4',4.2804,'4.md.a.3','calculate width of a rectangle (non-square) given length and area');
*/

var i_4_md_a_3__4 = new Class(
{
Extends: TextItem,

        initialize: function(sheet)
        {
            this.parent(sheet);
				
            this.mType = '4.md.a.3_4';   
				
				this.units = '';       	
				var varA = 0;
				var varB = 0;
				var varC = 0;
				var length = 0;
				var width = 0;

			// pick length
			varA = 2 + Math.floor(Math.random()*11);

			do {
    				// pick width
					varB = 2 + Math.floor(Math.random()*11);	
			}
			while (varA == varB);			
				
			varC = parseInt(varA * varB);

			if (varA > varB)
			{
				length = varA;
				width = varB;
			}
			else
			{
				width = varA;
				length = varB;
			}

			rand = 1 + Math.floor(Math.random()*3);

			if(rand == 1)
				this.units = 'feet';
			if(rand == 2)
				this.units = 'meters';
			if(rand == 3)
				this.units = 'inches';
								                       
				this.setQuestion('What is the width of a rectangle that has a length of ' + length +  ' ' + this.units + ' and an area of ' + varC + ' square ' + this.units + '?');
            this.setAnswer('' + varB,0);   
        
        },

			createShapes: function()
         {
				this.parent();
										
				//question Label
                
			},
									
			showQuestion: function()
			{

				   this.parent();

					this.mQuestionLabel.setPosition(230, 100);
					this.mQuestionLabel.setSize(200, 100);
					

					this.mUnitsLabel = new Shape(-110,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUnitsLabel);
                this.mUnitsLabel.mCollidable = false;
                this.mUnitsLabel.mCollisionOn = false;
					 this.mUnitsLabel.setText(this.units);
					this.mUnitsLabel.setVisibility(true);
				
			}
});

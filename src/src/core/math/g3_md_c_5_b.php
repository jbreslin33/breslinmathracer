
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.c.5.b_3',4.0167,'3.md.c.5.b','' );
*/
var i_3_md_c_5_b__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '3.md.c.5.b_3';

        var w = Math.floor( (Math.random()*8)+2);
	var a = parseInt( w * 2);
        this.setQuestion('' + this.ns.mNameOne + ' used graph paper ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' borrowed from ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + ' to measure the area of a drawing. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' cut the paper into a number of unit squares and covered the picture with them. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' realized the area of the drawing is ' + a + ' square units. How many pieces of graph paper did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use to cover the drawing?' );
	this.setAnswer('' + a,0);  
	this.setAnswer('' + a + ' pieces',1);  
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.c.5.b_2',4.0166,'3.md.c.5.b','' );
*/
var i_3_md_c_5_b__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '3.md.c.5.b_2';

        this.r = Math.floor( (Math.random()*5)+1);
        this.setQuestion('' + 'The figure below is made using square units. What is the area of the figure in square in units?');
},

createQuestionShapes: function()
{
        if (this.r == 5)
        {
                //middle 9
                this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //north
                this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //east
                this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.setAnswer('17',0)
        }

        if (this.r == 4)
        {
                //middle 9
                this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //north
                this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //east
                this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.setAnswer('16',0)
        }

        if (this.r == 3)
        {
                //middle 9
                this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //north
                this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //east
                this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.setAnswer('15',0)
        }

        if (this.r == 2)
        {
                //middle 9
                this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                
		this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		//north
                this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
              
		//west 
		this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		//east	
		this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		this.setAnswer('14',0)
	}
        if (this.r == 1)
        {
                //middle 9
                this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //north
                this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //east
                this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.setAnswer('14',0)
        }

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.c.5.b_1',4.0165,'3.md.c.5.b','' );
*/
var i_3_md_c_5_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
	this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '3.md.c.5.b_1';
   
	this.r = Math.floor( (Math.random()*5)+1);
        this.setQuestion('' + 'The figure below is made using square units. What is the area of the figure in square in units?');
},

createQuestionShapes: function()
{
	if (this.r == 1)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //south
                this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('45',0);
	}
	if (this.r == 2)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		//this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //south
                this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,200,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('42',0);
	}
	if (this.r == 3)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		//this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //south
                //this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('39',0);
	}
	if (this.r == 4)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		//this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //south
                //this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('36',0);
	}
	if (this.r == 5)
	{
		//middle 9
        	this.addQuestionShape(new Rectangle(25,25,200,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

        	this.addQuestionShape(new Rectangle(25,25,200,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//east	
		this.addQuestionShape(new Rectangle(25,25,275,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,300,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,325,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		//this.addQuestionShape(new Rectangle(25,25,275,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        
		//north	
		this.addQuestionShape(new Rectangle(25,25,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		this.addQuestionShape(new Rectangle(25,25,200,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,225,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	this.addQuestionShape(new Rectangle(25,25,250,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
		
		//this.addQuestionShape(new Rectangle(25,25,200,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,225,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
        	//this.addQuestionShape(new Rectangle(25,25,250,0,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //south
                //this.addQuestionShape(new Rectangle(25,25,200,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,200,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,225,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,250,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //west
                this.addQuestionShape(new Rectangle(25,25,125,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                this.addQuestionShape(new Rectangle(25,25,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,150,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                this.addQuestionShape(new Rectangle(25,25,175,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

                //this.addQuestionShape(new Rectangle(25,25,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,150,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
                //this.addQuestionShape(new Rectangle(25,25,175,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));

		this.setAnswer('33',0);
	}
}
});


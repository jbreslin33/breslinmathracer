
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.5_1',6.1201,'6.ns.c.5','Understanding positive and negative numbers and opposites');
*/
var i_6_ns_c_5__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.c.5_1';

        var r = Math.floor(Math.random()*6);

        if(r == 0)
        {
          this.setQuestion('Write an integer that best represents this scenario: penalty of 5 points' );
          this.setAnswer('' + -5,0);
        }
        if(r == 1)
        {
       this.setQuestion('Write an integer that best represents this scenario: weight gain of 3 pounds' );
       this.setAnswer('' + 3,0);
        }
        if(r == 2)
        {
          this.setQuestion('Write an integer that best represents this scenario: 2 new students come to your school' );
          this.setAnswer('' + 2,0);
        }
        if(r == 3)
        {
          this.setQuestion('Write an integer that best represents this scenario: adding 4 plates to a stack' );
          this.setAnswer('' + 4,0);
        }
        if(r == 4)
        {
          this.setQuestion('Write an integer that best represents this scenario: 6 dollar price reduction' );
          this.setAnswer('' + -6,0);
        }
        if(r == 5)
        {
          this.setQuestion('Write an integer that best represents this scenario: losing 1 button off of your jacket' );
          this.setAnswer('' + -1,0);
        }

}

});


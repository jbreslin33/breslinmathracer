/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.b_3',5.1703,'5.nf.b.4.b','fraction word problem area');
*/
var i_5_nf_b_4_b__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4.b_3';
        this.ns = new NameSampler();
        var na = 0;
        var da = 0;
        var nb = 0;
        var db = 0;
        while (na >= da || nb >= db)
        {
                na = Math.floor((Math.random()*8)+2);
                da = Math.floor((Math.random()*8)+2);
                nb = Math.floor((Math.random()*8)+2);
                db = Math.floor((Math.random()*8)+2);
        }

        var fractiona = new Fraction(na,da);
        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(na*nb),parseInt(da*db),true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' built a rectangular garden in a video game that is ' + fractiona.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' in length and ' + fractionb.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' wide. What is the area of the garden in ' + this.ns.mDistanceIncrementLarge + ' squared?');
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.b_2',5.1702,'5.nf.b.4.b','fraction word problem area');
*/
var i_5_nf_b_4_b__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4.b_2';
        this.ns = new NameSampler();
        var na = 0;
        var da = 0;
        var nb = 0;
        var db = 0;
        while (na >= da || nb >= db)
        {
                na = Math.floor((Math.random()*8)+2);
                da = Math.floor((Math.random()*8)+2);
                nb = Math.floor((Math.random()*8)+2);
                db = Math.floor((Math.random()*8)+2);
        }

        var fractiona = new Fraction(na,da);
        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(na*nb),parseInt(da*db),true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' plays on a rectangular field that is ' + fractiona.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' in length and ' + fractionb.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' wide. What is the area of the field in ' + this.ns.mDistanceIncrementLarge + ' squared?');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.b_1',5.1701,'5.nf.b.4.b','fraction word problem area');
*/
var i_5_nf_b_4_b__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.4.b_1';
        this.ns = new NameSampler();
        var na = 0;
        var da = 0;
        var nb = 0;
        var db = 0;
        while (na >= da || nb >= db)
        {
                na = Math.floor((Math.random()*8)+2);
                da = Math.floor((Math.random()*8)+2);
                nb = Math.floor((Math.random()*8)+2);
                db = Math.floor((Math.random()*8)+2);
        }

        var fractiona = new Fraction(na,da);
        var fractionb = new Fraction(nb,db);
        var answer = new Fraction(parseInt(na*nb),parseInt(da*db),true);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' had a rectangular board that was ' + fractiona.getString() + ' ' + this.ns.mDistanceIncrementSmall + ' in length and ' + fractionb.getString() + ' ' + this.ns.mDistanceIncrementSmall + ' wide. What is the area of the board in ' + this.ns.mDistanceIncrementSmall + ' squared?');
}
});


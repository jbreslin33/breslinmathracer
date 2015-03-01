
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_1',4.0401,'4.oa.b.4','');
*/
var i_4_oa_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_1';
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var e = 13;
        var f = 13;

        while(e % 8 != 0)
        {
                a = Math.floor(Math.random()*10+20);
                b = Math.floor(Math.random()*10+20);
                c = Math.floor(Math.random()*2+2);
                d = Math.floor(Math.random()*2+2);
                e = parseInt(a + b + c + d);
                f = parseInt(e / 8);
        }
        this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in rows. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants each row to have the same amount of ' + this.ns.mThingOne + '. How many different ways can ' + this.ns.mNameOne + ' arrange ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mThingOne + ' while still making sure that all the rows have an equal amount of ' + this.ns.mThingOne + '?');
        this.setAnswer('' + f,0);
}
});


var main_menu = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_17';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*20)+2);
                var b = Math.floor((Math.random()*20)+1);

                this.setQuestion('' + this.ns.mNameOne + ' has some balls. The ratio of his ' + this.ns.mColorOne + ' balls to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mColorTwo + ' balls is ' + a + ' to ' + b + '. Write the ratio with a colon of ' + this.ns.mColorOne + ' balls to ' + this.ns.mColorTwo + ' balls.');

                this.setAnswer('' + a + ':' + b ,0);
        }
});

